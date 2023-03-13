const API_URL = "https://eth-goerli.g.alchemy.com/v2/eTQJ6MRp1N1LUZr-kd8YQMd1hMoQEZYr"
const METAMASK_PRIVATE_KEY="33b1d7a7687ba3a5dd35b5e3866ed64f3435b6260f304c13b71edf1ef9ab2a60"
const METAMASK_PUBLIC_KEY="0x99B306257D7D014D4e9e276B1796190F70DF5813"


// require('dotenv').config();
// const API_URL = process.env.API_URL;
const { createAlchemyWeb3 } = require("@alch/alchemy-web3");
const alchemyWeb3 = createAlchemyWeb3(API_URL);
const contract = require("../artifacts/contracts/minting.sol/TorNFT.json"); 


const contractAddress = "0x446ea4d8556d0C824c6483895480EB01BE1Fe3c6";
const nftContract = new alchemyWeb3.eth.Contract(contract.abi, contractAddress); 

async function mintNFT(tokenURI) {
    // get the nonce - nonce is needed for security reasons. It keeps track of the number of
    // transactions sent from our address and prevents replay attacks.
  const nonce = await alchemyWeb3.eth.getTransactionCount(METAMASK_PUBLIC_KEY, 'latest');
  const tx = {
    from: METAMASK_PUBLIC_KEY, // our MetaMask public key
    to: contractAddress, // the smart contract address we want to interact with
    nonce: nonce, // nonce with the no of transactions from our account
    gas: 1000000, // fee estimate to complete the transaction
    data: nftContract.methods
      .createNFT("0x99B306257D7D014D4e9e276B1796190F70DF5813", tokenURI)
      .encodeABI(), // call the createNFT function from our OsunRiverNFT.sol file and pass the account that should receive the minted NFT.
  };
  const signPromise = alchemyWeb3.eth.accounts.signTransaction(
    tx,
    METAMASK_PRIVATE_KEY
  );
  signPromise
    .then((signedTx) => {
      alchemyWeb3.eth.sendSignedTransaction(
        signedTx.rawTransaction,
        function (err, hash) {
          if (!err) {
            console.log(
              "The hash of our transaction is: ",
              hash,
              "\nCheck Alchemy's Mempool to view the status of our transaction!"
            );
          } else {
            console.log(
              "Something went wrong when submitting our transaction:",
              err
            );
          }
        }
      );
    })
    .catch((err) => {
      console.log(" Promise failed:", err);
    });
};


    console.log(JSON.stringify(contract.abi));
    mintNFT("https://ipfs.io/ipfs/QmepDVmn8qRg9usL5sEqkLVjtDJi1vssjY8wGKJTvvNCWp") // pass the CID to the JSON file uploaded to Pinata

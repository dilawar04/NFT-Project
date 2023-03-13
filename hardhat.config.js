/**
* @type import('hardhat/config').HardhatUserConfig
*/

const METAMASK_PRIVATE_KEY = "33b1d7a7687ba3a5dd35b5e3866ed64f3435b6260f304c13b71edf1ef9ab2a60"
const API_URL = "https://eth-goerli.g.alchemy.com/v2/eTQJ6MRp1N1LUZr-kd8YQMd1hMoQEZYr"

// require('env').config();
require("@nomiclabs/hardhat-ethers");
// const { API_URL, METAMASK_PRIVATE_KEY } = process.env;
// const { API_URL, METAMASK_PRIVATE_KEY } = process.env;

module.exports = {
    solidity: "0.8.0",
    defaultNetwork: "goerli",
    networks: {
      hardhat: {},
      goerli: {
        url: API_URL,
        accounts: [`0x${METAMASK_PRIVATE_KEY}`]
      }
    },
    paths: {
        sources: "./contracts",
        tests: "./test",
        cache: "./cache",
        artifacts: "./artifacts"
      },
};
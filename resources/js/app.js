/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');

import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Web3 from 'web3/dist/web3.min.js'
window.Web3 = Web3;

import Fortmatic from 'fortmatic';

document.onreadystatechange = () => {
    const metaMaskLoginButton = document.getElementById("metamask_login");
    const metaMaskLoginButton_modal = document.getElementById("metamask_login_modal");
    console.log(metaMaskLoginButton,"bnutton");
    if (metaMaskLoginButton != null || metaMaskLoginButton_modal != null) {
        metaMaskLoginButton.onclick = async (event) => {
            if (!window.ethereum) {
                console.error('Metamask not exist');
                return;
            }

            // const web3 = new Web3(window.ethereum);
            const web3 = new Web3(window.ethereum.providers.find((provider) => provider.isMetaMask));


            const signatureUrl = metaMaskLoginButton.getAttribute("data-signature-url");
            const authenticateUrl = metaMaskLoginButton.getAttribute("data-authenticate-url");
            const redirectUrl = metaMaskLoginButton.getAttribute("data-redirect-url");

            const message = (await axios.get(signatureUrl)).data;
            const [ address ] = await web3.eth.requestAccounts();

            const signature = await web3.eth.personal.sign(message, address);

            try {
                const { status } = await axios.post(authenticateUrl, {
                    'address': address,
                    'signature': signature,
                });
                if (status == 200) {
                    window.location = redirectUrl;
                }
            } catch (e) {
                console.error(e);
            }
        }
        metaMaskLoginButton_modal.onclick = async (event) => {
            if (!window.ethereum) {
                console.error('Metamask not exist');
                return;
            }

            // const web3 = new Web3(window.ethereum);
            const web3 = new Web3(window.ethereum.providers.find((provider) => provider.isMetaMask));

            const signatureUrl = metaMaskLoginButton.getAttribute("data-signature-url");
            const authenticateUrl = metaMaskLoginButton.getAttribute("data-authenticate-url");
            const redirectUrl = metaMaskLoginButton.getAttribute("data-redirect-url");

            const message = (await axios.get(signatureUrl)).data;
            const [ address ] = await web3.eth.requestAccounts();

            const signature = await web3.eth.personal.sign(message, address);

            try {
                const { status } = await axios.post(authenticateUrl, {
                    'address': address,
                    'signature': signature,
                });
                if (status == 200) {
                    window.location = redirectUrl;
                }
            } catch (e) {
                console.error(e);
            }
        }
    }




// TODO: Step 2: Setup Developer API Key

const fort = document.getElementById("fortmatic");
const fort_modal = document.getElementById("fortmatic_modal");
const disconnect = document.getElementById("disconnect");
// Initialize provider

console.log(fort,"fort");
const fm = new Fortmatic('pk_live_94217052EF54D13F');
window.web3 = new Web3(fm.getProvider());
console.log(window.web3,"provider");


// End Step 2
fort.onclick = async (event) => {
    let isUserLoggedIn = await fm.user.isLoggedIn();
    console.log(isUserLoggedIn); // false 
    let userData = await fm.user.getUser(); 

    const redirectUrl = fort.getAttribute("data-redirect-url");
    // console.log(window.web3.eth);
    // console.log(fm,"user");
    // return false;
    var data=[];
    fm.configure({ primaryLoginOption: 'email' }).then(() => {
        fm.user.login().then(async() => {
            isUserLoggedIn = await fm.user.isLoggedIn();
            userData = await fm.user.getUser(); 
            console.log(isUserLoggedIn,"login");
            console.log(userData,"login");
          if(isUserLoggedIn){

           
          window.web3.eth.getAccounts().then((accounts) => {
            console.log(accounts); // ['0x...']
            // data[]=accounts;
            // console.log(data,"data");
            data=userData;
            data=JSON.stringify(data);
            console.log(data,"data");
            window.location = redirectUrl+'?data='+data+'&address='+accounts[0];
          }); // ['0x...']
        } 
        });
        
      });
      
      data=JSON.stringify(data);
      console.log(data);
    //   window.location = redirectUrl+'?account='+accounts;
    
}

fort_modal.onclick = async (event) => {
    let isUserLoggedIn = await fm.user.isLoggedIn();
    console.log(isUserLoggedIn); // false 
    let userData = await fm.user.getUser(); 

    const redirectUrl = fort.getAttribute("data-redirect-url");
    // console.log(window.web3.eth);
    // console.log(fm,"user");
    // return false;
    var data=[];
    fm.configure({ primaryLoginOption: 'email' }).then(() => {
        fm.user.login().then(async() => {
            isUserLoggedIn = await fm.user.isLoggedIn();
            userData = await fm.user.getUser(); 
            console.log(isUserLoggedIn,"login");
            console.log(userData,"login");
          if(isUserLoggedIn){

           
          window.web3.eth.getAccounts().then((accounts) => {
            console.log(accounts); // ['0x...']
            // data[]=accounts;
            // console.log(data,"data");
            data=userData;
            data=JSON.stringify(data);
            console.log(data,"data");
            window.location = redirectUrl+'?data='+data+'&address='+accounts[0];
          }); // ['0x...']
        } 
        });
        
      });
      
      data=JSON.stringify(data);
      console.log(data);
    //   window.location = redirectUrl+'?account='+accounts;
    
}



disconnect.onclick = async (event) => {
    fm.user.logout();
    window.location = '/disconnect';
}

}
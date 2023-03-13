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
import Fortmatic from 'fortmatic';
import Web3 from 'web3/dist/web3.min.js'
window.Web3 = Web3;



document.onreadystatechange = () => {
    const metaMaskLoginButton = document.getElementById("metamask_login");
    console.log(metaMaskLoginButton,"bnutton");
    if (metaMaskLoginButton != null) {
        metaMaskLoginButton.onclick = async (event) => {
            if (!window.ethereum) {
                console.error('Metamask not exist');
                return;
            }

            const web3 = new Web3(window.ethereum);

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
    let fm = new Fortmatic('pk_test_2652BFB1D8DE839E');
web3 = new Web3(fm.getProvider());
const fort = document.getElementById("fortmatic");
console.log(fort1,"fort");
fort.onclick = async (event) => {
    console.log("click fort");
fm.configure({ primaryLoginOption: 'email' }).then(() => {
    fm.user.login().then(() => {
      web3.eth.getAccounts().then(console.log); // ['0x...']
    });
  });
// End Step 2

}

}
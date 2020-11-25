import { fetchData} from "./modules/DataMiner.js";

(()=> {


let vue_vm = new Vue({

	data: {
		currentImageData:{},
		galleryImages:[]


	}


}).$mount("#imageApp");

let vue_vm2 = new Vue({

	data: {
		currentVideoData:{},
		galleryVideos:[]
	}


}).$mount("#videoApp");




})();

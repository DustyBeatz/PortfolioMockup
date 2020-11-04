import { fetchData} from "./modules/DataMiner.js";

(()=> {
	// stub - your code goes here 

	//build a handleDataSet function to tuilize the data you bring in.

	//build a gallery shadow box in modules

	//

	console.log(data);


	fetchData(".includes/functions.php").then(data => handleData(data)).catch(err => { console.log(err);})
})();

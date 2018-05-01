
function mmyFunction() {

						var mydate= new Date()
						var theyear= mydate.getFullYear()
						var themonth= mydate.getMonth()+1
						var thetoday= mydate.getDate()
						var now= thetoday+"-"+themonth+"-"+theyear
												document.getElementById("demo").innerHTML = now;

}
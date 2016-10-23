var bodyMess = returnCitySN["cip"]+','+returnCitySN["cname"]+"<br>";

var index = 0;
// 2.异步请求
repeat();
function repeat(){
	$.ajax({
		type:"post",
		url: './interface/mainController.php',
		async:true,
		success:function(data){
			bodyMess += data+"<br>";
			$("#logMess").html(bodyMess);
		}
	});
}
var rep = setInterval(repeat,10000);
	
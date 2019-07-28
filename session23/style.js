
	
// for (var row = 0; row < 8; row++) {
//     var str = '';
//     for (var col = 0; col < 8; col++) {
// 	if ((row % 2) == (col % 2)) {
// 	    str += '#';
// 	} else {
// 	    str += '_';
// 	}
//     }
//     console.log(str);
// }

// var row = '';
// for(var i = 0; i <=5; i++) {
// 	row += '*';
// 	console.log(row);
// }

// var row = '';
// for (var i = 1; i <=7 ; i++){
// 	for(var j = 1 ; j<=i; j++){
// 		row +='*';
// 	}
// 	row+='';
// }
// for(var i= 7; i >= 1; i--)  
// {  
// 	for(j=1; j <= i; j++)  
// 	{  
// 		row+= ' * ';  
// 	}  
// 	row+=' ';  
// } 


// var m=6;
// for(var i = 0; i <= m; i++){
// 	for (var j = 0; j <= 2* i -1; j++){
// 		document.write('*');
// 	}
// 	document.write('<br>');
// }


// var n=6;
// for(var i = 0; i < 6; i++){
// 	for(var j = 0; j < n-i; j++){
// 		document.write('&nbsp&nbsp');
// 	}
// 	for(var k = 0; k < 2*i-1; k++){
// 		document.write('*')
// 	}
// 	document.write('<br>');
// }
// document.write('<br>');

// document.write("<div class='bancovua'>");
// var row;
// var col;
// for (var row = 0; row < 8; row ++) {
// 	for (var col = 0; col < 8; col++){
// 		if ((col + row) %2==0){
// 			document.write("<div class='black'></div>");
// 		} else {
// 			document.write("<div class='white'></div>");
// 		}
// 	}
// }
// document.write('</div>');


var kq =12;
for (var i = 4; i>=1; i--) {
	document.write('<br>');
	document.write("số cam trước khi qua ải là");
	document.write(i);
	kq = kq*2;
	document.write('<br>');
	document.write(kq);
}
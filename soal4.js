const cetak=(num)=>{

let x, y, chr='';
for(x=1;x<=num;x++){
	if(x===1||x===num){
		for(y=1;y<=num;y++){
			chr=chr+" + ";
		}
	}else{
		for(y=1;y<=num;y++){
			if(y===(Math.round(num/2)) ){
				chr=chr+ " + ";
			}else{
				chr=chr+" = ";
			}
		}
	}
	console.log(chr);
	chr='';
}

}
cetak(7);
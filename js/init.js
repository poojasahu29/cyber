$('button').click(function(){
	var b= $('#txt1').val();
	var c= $('#txt2').val();
	$('#result').val(0);
	var a=$(this).val();
		if(a=="+")
			$('#result').val(parseFloat(b)+parseFloat(c));
		if(a=="-")
			$('#result').val(parseFloat(b)-parseFloat(c));
		if(a=="*")
			$('#result').val(parseFloat(b)*parseFloat(c));
		if(a=="/")
			$('#result').val(parseFloat(b)/parseFloat(c));
});
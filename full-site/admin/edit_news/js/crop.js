// x1, y1, x2, y2 - ���������� ��� ������� �����������
// crop - ����� ��� ���������� �����������
var x1, y1, x2, y2, crop = 'dump_img/';
var jcrop_api;

jQuery(function($){             

	$('#target').Jcrop({		
		onChange:   showCoords,
		onSelect:   showCoords
	},function(){		
		jcrop_api = this;		
	});
	// ����� ���������	
    $('#release').click(function(e) {		
		release();
    });   
	// ��������� ���������
    $('#ar_lock').change(function(e) {
		jcrop_api.setOptions(this.checked?
			{ aspectRatio: 3/4 }: { aspectRatio: 0 }); //было 3:4
		jcrop_api.focus();
    });
   // ��������� �����������/������������ ������ � ������
   $('#size_lock').change(function(e) {
		jcrop_api.setOptions(this.checked? {
			minSize: [ 80, 80 ],
			maxSize: [ 350, 350 ]
		}: {
			minSize: [ 0, 0 ],
			maxSize: [ 0, 0 ]
		});
		jcrop_api.focus();
    });
	// ��������� ���������
	function showCoords(c){
		x1 = c.x; $('#x1').val(c.x);		
		y1 = c.y; $('#y1').val(c.y);		
		x2 = c.x2; $('#x2').val(c.x2);		
		y2 = c.y2; $('#y2').val(c.y2);
		
		$('#w').val(c.w);
		$('#h').val(c.h);
		
		if(c.w > 0 && c.h > 0){
			$('#crop').show();
		}else{
			$('#crop').hide();
		}
		
	}	
});


function release(){
	jcrop_api.release();
	$('#crop').hide();
}
// ������� ����������� � ����� ����������
jQuery(function($){
	$('#crop').click(function(e) {
		var img = $('#target').attr('src');
        var d = new Date();
        var n = d.getMilliseconds();
		$.post('action.php', {'x1': x1, 'x2': x2, 'y1': y1, 'y2': y2, 'img': img, 'dump_img': crop}, function(file) {
			$('#cropresult').append('<img id="capcha_url" src="'+crop+file+'?='+n+'" class="mini">');
			release();
		});
		
    });
    // $('#mini').click(function(e) {
    //     var img = $('#target').attr('src');
    //     $.post('mini.php');
    //
    // });

});



<!-- <script type="text/javascript">
var popRandom = function() {
	var type = ([
		"Error",
		"Success",
		"Info",
		"Warning",
		"Question",
	])[Math.floor(Math.random()*4)];
	$("#PopupReminder").remind(
		type.toLowerCase(),
		type + ': ' + Math.random() + ' ' + Math.random()
	);
};
</script>
<p>&nbsp;</p>
<div class="container-fluid">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" onclick="popRandom()">
	Launch general reminder
	</button>
</div> -->

<!-- Safety options modal -->
<div id="PopupReminder" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="alert alert-danger" role="alert">
			<span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;
			<span class="caption">数据中心设定失败：上次数据同步未完成，请稍后再试。</span>
		</div>
	</div><!-- /.modal-dialog -->
</div>

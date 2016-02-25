// JavaScript Document

/*
 * Checkbox module
 */
$(function() {
	$.fn.extend({
		'checked': (function(checkOrNot) {
			this.each(function() {
				this.checked = checkOrNot;
			});
			return this;
		}),
		'highlight': (function(addOrNot) {
			this.parent().parent().toggleClass('info', addOrNot);
			return this;
		})
	});

	$('#fileview > thead').on('change', 'tr > th > input', function() {
		$(this).highlight(this.checked);
		$('#fileview > tbody > tr > td > input')
			.checked(this.checked)
			.highlight(this.checked);
	});

	$('#fileview > tbody').on('change', 'tr > td > input', function() {
		if (this.checked === false) {
			// Actually there's only one checkbox inside the <thead>
			$('#fileview > thead > tr > th > input').checked(false).highlight(false);
		}
		$(this).highlight(this.checked);
	});
});


/*
 * Safety options panel module
 */
$(function() {
	var SafetyOptionsModal = $("#SafetyOptionsModal");

	SafetyOptionsModal.on("hidden.bs.modal", function () {
		$(this).find(".alert-success, .alert-danger").hide();
		$("#SaveSafetyOptions").removeClass("disabled");
	})

	$("#SaveSafetyOptions").on("click", function (ev) {
		var status = Math.random() < 0.66 ? "success" : "error";
		var ExampleRpcData = {
			"error": {
				"jsonrpc": "2.0",
				"error": {
					"code": -32701,
					"message": "数据中心设定失败：上次数据同步未完成，请稍后再试。",
					"data": {}
				},
				"id": 2
			},
			"success": {
				"jsonrpc": "2.0",
				"result": "success",
				"id": 1
			}
		};
		var ajaxOptions = {
			"success": function(data) {
				if (!$.isEmptyObject(data.result)) {
					$("#PopupReminder").remind(
						"success", "数据中心设定成功，正在进行同步。");
				} else {
					$("#PopupReminder").remind(
						"error", data.error.message);
				}
			},
			"error": function() {
				$("#PopupReminder").remind(
					"error", "数据中心设定失败：网络出问题了。");
			}
		};
		setTimeout(function() {
			ajaxOptions.success(ExampleRpcData[status]);
		}, 500);
		$("#SafetyOptionsModal").modal("hide");
	})
});

/*
 * General reminder module
 */
$(function() {
	var reminderAssets = {
		"error": {
			"alert": "alert alert-danger",
			"icon": "glyphicon glyphicon-exclamation-sign"
		},
		"success": {
			"alert": "alert alert-success",
			"icon": "glyphicon glyphicon-ok-sign"
		},
		"info": {
			"alert": "alert alert-info",
			"icon": "glyphicon glyphicon-info-sign"
		},
		"warning": {
			"alert": "alert alert-warning",
			"icon": "glyphicon glyphicon-exclamation-sign"
		},
		"question": {
			"alert": "alert alert-warning",
			"icon": "glyphicon glyphicon-question-sign"
		}
	};

	$.fn.extend({
		"remind": (function(type, message) {
			var This = $(this);
			This.find(".alert").attr("class", reminderAssets[type]["alert"]);
			This.find(".glyphicon").attr("class", reminderAssets[type]["icon"]);
			This.find(".caption").text(message);
			This.modal('show');
			//setTimeout(function() {
			//	This.modal('hide');
			//}, 1500);
		})
	});
});
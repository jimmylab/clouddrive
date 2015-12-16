<!-- <div class="container-fluid">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#SafetyOptionsModal">
	Launch safety options modal
	</button>
</div> -->

<!-- Safety options modal -->
<div id="SafetyOptionsModal" class="modal fade" tabindex="-2" role="dialog" aria-labelledby="SafetyOptionsModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="关闭"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="SafetyOptionsModalLabel">数据安全 - 多云端选择</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-block alert-info">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>Tips: </h4>
					您可以选择多个数据中心，副本越多文件越不易丢失。选用离您所在地最近的数据中心还可以提升上传下载速度。
				</div>
				<!-- <div class="container-fluid">
					<div class="col-xs-12 col-sm-6">
						<input type="checkbox" checked />
						深圳数据中心(阿里云)
					</div>
					<div class="col-xs-12 col-sm-6">
						<input type="checkbox" />
						广州数据中心(百度云)
					</div>
					<div class="col-xs-12 col-sm-6">
						<input type="checkbox" />
						杭州数据中心(阿里云)
					</div>
					<div class="col-xs-12 col-sm-6">
						<input type="checkbox" />
						上海数据中心(阿里云)
					</div>
					<div class="col-xs-12 col-sm-6">
						<input type="checkbox" />
						青岛数据中心(阿里云)
					</div>
					<div class="col-xs-12 col-sm-6">
						<input type="checkbox" />
						北京数据中心(百度云)
					</div>
					<div class="col-xs-12 col-sm-6">
						<input type="checkbox" />
						北京数据中心(阿里云)
					</div>
				</div> -->
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr align="center">
									<th>#</th>
									<th>数据中心</th>
									<th>价格(元/GB/月)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" name="datacenters[]" value="aliyun-sz" checked /></td>
									<td>深圳数据中心(阿里云)</td>
									<td>0.00</td>
								</tr>
									<td><input type="checkbox" name="datacenters[]" value="baidu-gz" /></td>
									<td>广州数据中心(百度云)</td>
									<td>0.00</td>
								</tr>
									<td><input type="checkbox" name="datacenters[]" value="aliyun-hz" /></td>
									<td>杭州数据中心(阿里云)</td>
									<td>0.00</td>
								</tr>
									<td><input type="checkbox" name="datacenters[]" value="aliyun-sh" /></td>
									<td>上海数据中心(阿里云)</td>
									<td>0.00</td>
								</tr>
									<td><input type="checkbox" name="datacenters[]" value="aliyun-qd" /></td>
									<td>青岛数据中心(阿里云)</td>
									<td>0.00</td>
								</tr>
									<td><input type="checkbox" name="datacenters[]" value="aliyun-bj" /></td>
									<td>北京数据中心(百度云)</td>
									<td>0.00</td>
								</tr>
									<td><input type="checkbox" name="datacenters[]" value="baidu-bj" /></td>
									<td>北京数据中心(阿里云)</td>
									<td>0.00</td>
								</tr>
							</tbody>
						</table>
					</div>
				<div>
					<p><b>注意：</b>更改数据中心后，需要花费一段时间同步文件。</p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				<button type="button" class="btn btn-primary" id="SaveSafetyOptions">保存更改</button>
			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

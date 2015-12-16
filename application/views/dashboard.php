<div class="container-fluid">
	<div class="row">
		<!-- Sidebar begin -->
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar" id="side-bar">
				<li class="active"><a href="#"><i class="glyphicon glyphicon-th"></i> 全部文件<span class="sr-only">(当前选项)</span></a></li>
				<li><a href="#"><i class="glyphicon glyphicon-picture"></i> &nbsp;图片</a></li>
				<li><a href="#"><i class="glyphicon glyphicon-file"></i> &nbsp;文档</a></li>
				<li><a href="#"><i class="glyphicon glyphicon-film"></i> &nbsp;视频</a></li>
				<li><a href="#"><i class="glyphicon glyphicon-music"></i> &nbsp;音乐</a></li>
				<li><a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> &nbsp;其他</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href=""><i class="glyphicon glyphicon-share"></i> &nbsp;我的分享</a></li>
				<li role="separator" class="nav-divider"></li>
				<li><a href=""><i class="glyphicon glyphicon-trash"></i> &nbsp;回收站</a></li>
				<li role="separator" class="nav-divider"></li>
			</ul>
			<div class="placeholder"></div>
			<div class="disk-usage">
				<div class="progress">
					<div
					class="progress-bar"
					role="progressbar"
					aria-valuenow="60"
					aria-valuemin="0" aria-valuemax="100"
					style="width: 60%;"></div>
				</div>
				<div class="row text-center">
					<span class="label-disk-usage">60.09GB</span>
					/
					<span class="label-disk-space">100GB</span>
				</div>
			</div>
		</div>
		<!-- Sidebar end -->

		<!-- File Panel begin -->
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<!--<h1 class="page-header">所有文件</h1>-->
			<div class="btn-toolbar placeholder" role="" aria-label="...">
				<button type="button" class="btn btn-primary navbar-btn">
					<!--<i class="glyphicon glyphicon-plane"></i>-->
					<i class=" glyphicon glyphicon-cloud-upload"></i>
					&nbsp; 上传 &nbsp;
				</button>
				<button type="button" class="btn btn-default navbar-btn">
					<i class="glyphicon glyphicon-plus"></i>
					新文件夹
				</button>
				<button type="button" class="btn btn-primary navbar-btn">
					<i class="glyphicon glyphicon-share-alt"></i>
					分享
				</button>
				<button type="button" class="btn btn-primary navbar-btn">
					<!--<i class="glyphicon glyphicon-download-alt"></i>-->
					<i class="glyphicon glyphicon-cloud-download"></i>
					下载
				</button>
				<button type="button" class="btn btn-primary navbar-btn">
					<i class=" glyphicon glyphicon-trash"></i>
					删除
				</button>
				<button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#SafetyOptionsModal">
					<i class="glyphicon glyphicon-cog"></i>
					安全设置
				</button>
			</div>
			<ol class="breadcrumb" id="path">
				<button type="button" class="btn btn-default" aria-haspopup="true">
					<i class="glyphicon glyphicon-level-up"></i>
					回上级
				</button>
				<span> &nbsp; &nbsp; | &nbsp;</span>
				<li><a href="#">我的网盘</a></li>
				<li><a href="#">我的电影</a></li>
				<li class="active">碟中谍系列Mission Impossible</li>
			</ol>
			<!--<h2 class="sub-header">Section title</h2>-->
			<div class="table-responsive">
				<table class="table table-striped table-hover" id="fileview">
					<thead>
						<tr>
							<th><input type="checkbox" /></th>
							<th width="40%">文件名</th>
							<th>类型</th>
							<th>大小</th>
							<th>修改日期</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Lorem</td>
							<td>ipsum</td>
							<td>dolor</td>
							<td>sit</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>amet</td>
							<td>consectetur</td>
							<td>adipiscing</td>
							<td>elit</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Integer</td>
							<td>nec</td>
							<td>odio</td>
							<td>Praesent</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>libero</td>
							<td>Sed</td>
							<td>cursus</td>
							<td>ante</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>dapibus</td>
							<td>diam</td>
							<td>Sed</td>
							<td>nisi</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Nulla</td>
							<td>quis</td>
							<td>sem</td>
							<td>at</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>nibh</td>
							<td>elementum</td>
							<td>imperdiet</td>
							<td>Duis</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>sagittis</td>
							<td>ipsum</td>
							<td>Praesent</td>
							<td>mauris</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Fusce</td>
							<td>nec</td>
							<td>tellus</td>
							<td>sed</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>augue</td>
							<td>semper</td>
							<td>porta</td>
							<td>Mauris</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>massa</td>
							<td>Vestibulum</td>
							<td>lacinia</td>
							<td>arcu</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>eget</td>
							<td>nulla</td>
							<td>Class</td>
							<td>aptent</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>taciti</td>
							<td>sociosqu</td>
							<td>ad</td>
							<td>litora</td>
						</tr>
						<!--<tr>
							<td><input type="checkbox" /></td>
							<td>torquent</td>
							<td>per</td>
							<td>conubia</td>
							<td>nostra</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>per</td>
							<td>inceptos</td>
							<td>himenaeos</td>
							<td>Curabitur</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>sodales</td>
							<td>ligula</td>
							<td>in</td>
							<td>libero</td>
						</tr>-->
					</tbody>
				</table>
			</div>
		</div>
		<!-- File Panel end -->
	</div>
</div>

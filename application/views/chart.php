							<?php $no=1; foreach ($persubbab->result() as $key) {?>
							<div class="col-md-12">
								<!-- BEGIN CHART PORTLET-->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-bar-chart font-green-haze"></i>
											<span class="caption-subject bold uppercase font-green-haze"> <?=$key->sub_bab?></span>
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="fullscreen">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<div id="chart_<?=$no?>" class="chart" style="height: 525px;">
										</div>
									</div>
								</div>
								<!-- END CHART PORTLET-->
							</div>
							<?php $no++; } ?>
							
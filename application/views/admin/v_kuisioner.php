<?php $index=1; ?>
<div class="portlet box blue" id="form_wizard_1">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i> Kuisioner  <span class="step-title">
									 </span>
								</div>
							</div>
							<div class="portlet-body form">
								<?= form_open('menu/save', array('class'=>'form-horizontal', 'id'=>'submit_form', 'name'=>'forma')); ?>
									<div class="form-wizard">
										<div class="form-body">
											<ul class="nav nav-pills nav-justified steps">
											<?php $no=1; foreach ($bab->result() as $result) { ?>											
												<li>
													<a href="#tab<?= $no; ?>" data-toggle="tab" class="step">
													<span class="number">
													<?= $no; ?> </span>
													<span class="desc">
													<i class="fa fa-check"></i><?= $result->bab; ?> </span>
													</a>
												</li>
											<?php $no++; } ?>
											</ul>
											<div id="bar" class="progress progress-striped" role="progressbar">
												<div class="progress-bar progress-bar-success">
												</div>
											</div>
											<div class="tab-content">
												<div class="alert alert-danger display-none">
													<button class="close" data-dismiss="alert"></button>
													Ada data yang belum anda isi.
												</div>
												<?php $no=1; foreach ($bab->result() as $bab) { ?>		
												<div class="tab-pane" id="tab<?= $no; ?>">
													<!-- BEGIN SAMPLE TABLE PORTLET-->
													<div class="portlet box blue">
														<div class="portlet-title">
															<div class="caption">
																<i class="fa fa-cogs"></i>Bab <?= $bab->bab; ?>
															</div>
														</div>
														<div class="portlet-body">
															<div class="table-responsive">
																<table width="39%" class="table table-bordered">
																<thead>
																<tr>
																	<th>No</th>
																	<th width='50%'><center>
																		 Indikator</center>
																	</th>
																	<th width='10%'><center>
																		 Sangat Tidak Setuju</center>
																	</th>
																	<th width='10%'><center>
																		 Tidak Setuju</center>
																	</th>
																	<th width='10%'>																	   Cukup</th>
																	<th width='10%'><center>
																		 Setuju</center>
																	</th>
																	<th width='10%'><center>
																		 Sangat Setuju</center>
																	</th>
																</tr>
																</thead>
																<tbody>
																<?php  $no1=1;
																foreach ($subbab->result() as $result) { 
																	if($result->id_bab==$no){
																?>
																<tr>
																	<td>
																		 <?= $no1;?>
																	</td>
																	<td>
																		<?= $result->sub_bab ?>
																	</td>
																	<td>
																	<center>
																		 <label><input type="radio" name="r<?= $index ?>" value="1" ></label></center>
																	</td>
																	<td><center>
																		 <label><input type="radio" name="r<?= $index ?>" value="2" ></label></center>
																	</td>
																	<td><center>
																		 <label><input type="radio" name="r<?= $index ?>" value="3" ></label></center>
																	</td>
																	<td><center>
																		<label> <input type="radio" name="r<?= $index ?>" value="4" ></label></center>
																	</td>
																	<td><center>
																		 <label><input type="radio" name="r<?= $index ?>" value="5" ></label></center>
																	</td>
																</tr>

															<?php $no1++; $index++; } }?>
																</tbody>
															  </table>
															  <div class="col-lg-auto">

															      <input class="input-lg" id="saran" name="s<?php echo $no?>" type="text" placeholder="Saran">
															    </div>
															</div>
														</div>
													</div>
						<!-- END SAMPLE TABLE PORTLET-->
												</div>
												<?php $no++; } ?>
												
											</div>
										</div>
										<div class="form-actions">

											<div class="row">
											
												<div class="col-md-offset-3 col-md-9">
													<a href="javascript:;" class="btn default button-previous">
													<i class="m-icon-swapleft"></i> Back </a>
													<a href="javascript:;" class="btn blue button-next">
													Continue <i class="m-icon-swapright m-icon-white"></i>
													</a>
													<button type="submit" class="btn green button-submit">Submit<i class="m-icon-swapright m-icon-white"></i></button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
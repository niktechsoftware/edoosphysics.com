<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                             
                                                <th>S.N.</th>
                                                <th>Students Name</th>
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>Enquiry Date</th>
                                               <!-- <th>Action</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $i = 1;?>
                                        	<?php $res = $this->db->get("sturegistration")->result();?>
                                        	<?php foreach($res as $row):?>
                                            <tr>
                                              
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><?php echo $row->mobile; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->date; ?></td>
                                              
                                               <!-- <td>
                                                	<a href="<?php echo base_url();?>apanelForms/deleteCareer/<?php echo $row->id; ?>">
                                                		Delete
                                                	</a>
                                                </td>-->
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
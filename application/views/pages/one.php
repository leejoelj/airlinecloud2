<!-- main-cont -->
<div class="main-cont">
  <div class="body-wrapper">
    <div class="wrapper-padding">
    <div class="page-head">
      <div class="page-title">Flights - <span>one way</span></div>
  
      <div class="clear"></div>
    </div>

     
      <div class="two-colls-right">
        <div class="two-colls-right-b">
          <div class="padding">
          
            <div class="catalog-row">
            <?php foreach ($show->result() as $row) { ?>
              <!-- // flight-item // -->
              <div class="flight-item fly-in">
                <div class="flt-i-a">
                  <div class="flt-i-b">
                    <div class="flt-i-bb">
                    <div class="flt-l-a">
                      <div class="flt-l-b">
                        <div class="way-lbl">departure</div>
                      </div>
                      <div class="flt-l-c">
                        <div class="flt-l-cb">
                          <div class="flt-l-c-padding">
                            
                            <!-- // -->
                            <div class="flight-line">
                              <div class="flight-line-a">
                                <b><?php echo $row->from; ?></b>
                                <span><?php echo $row->departure; ?></span>
                              </div>
                              <div class="flight-line-d"></div>
                              <div class="flight-line-a">
                                <b><?php echo $row->to; ?></b>
                                <span><?php echo $row->arrival; ?></span>
                              </div>
                              <div class="flight-line-d"></div>
                              <div class="flight-line-a">
                                <b>time</b>
                                <span><?php echo $row->duration; ?></span>
                              </div>
                              <div class="flight-line-b">
                                <?php echo $row->price; ?>
                              </div>
                              <div class="clear"></div>
                                          
                            </div>
                            <!-- \\ -->
                          </div>
                        </div>
                        <br class="clear" />
                      </div>
                    </div>
                    <div class="clear"></div>
                    </div>
                    <br class="clear" />
                  </div>
                </div>
                <div class="flt-i-c">
                  <div class="flt-i-padding">
                    
                    <a href="<?php echo base_url(); ?>users/login" class="cat-list-btn">select now</a>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
              <!-- \\ flight-item \\ -->
              <?php } ?>
                                                      
            </div>
            
            <div class="clear"></div>
            
      
          </div>
        </div>
        <br class="clear" />
    
    </div>
    <div class="clear"></div>
    
    </div>	
  </div>  
</div>
<!-- /main-cont -->
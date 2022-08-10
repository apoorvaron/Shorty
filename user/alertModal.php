<?php

                            echo "  <script>
                            let alertModal =  document.querySelector('#alertModal');
                
                            alertModal.innerHTML+=`
                                                        <div class='col-md-12 col-xl-12' style=''>
                                                            <div class='card m-b-30'>
                                                                <div class='card-body'>
                                                                        <div class=' alert-dismissible fade show d-flex align-items-center' role='alert'>
                                                                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                                                </button>
                                                                                <h4 style='    margin: 0 0 0px;color:green; '>
                                                                            <i class='mdi mdi-clipboard-alert font-27'></i><strong> ".$alertMsz."</strong> 
                                                                            </h4>
                                                                        </div>
                                                        </div> <!-- end col -->            
                            `;
                            let timeleft = 5;
                            let downloadTimer = setInterval(function(){
                            if(timeleft <= 0){
                                alertModal.innerHTML=``;
                            } else {
                            }
                            timeleft -= 1;
                            }, 1000);
                                        
                                    </script>";
?>
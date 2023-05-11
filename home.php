    
    <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input id="HomeDate" type="date">
            </div>
            <div class="nsights">
                <div id="mybox">
                    <div class="BookingRecords">
                    
                        <div class="middle">
                            <div class="left">
                                <h3>Total Donors</h3>
                                <div id="total_booking">
                                    <h1 class="num" data-target="500">
                                    999</h1>
                                </div>
                            </div>
                            <div class="Dashboard_progress">

                                <div class="number">
                                <span id="hom-span" class="material-icons-sharp">groups</span>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 hours</small>
                    </div>
                </div>
                <!----------------End Booking ---------------->
                <div id="mybox">
                    <div class="TotalSchadule">
                    
                        <div class="middle">
                            <div class="left">
                                <h3>Total facilites</h3>
                                    <div id="total_schadule">
                                        <h1 class="num" data-target="20">
                                        999</h1>
                                    </div>
                            </div>
                            <div class="Dashboard_progress">

                                <div class="number">
                                    <span id="hom-span" class="material-icons-sharp">domain</span>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 hours</small>
                    </div>
                </div>
                <!----------------End Booking ----------------><div id="mybox">
                    <div class="TotalBuses">
                    
                        <div class="middle">
                            <div class="left">
                                
                                <h3>Total stafs</h3>
                                <div id="total_Buses">
                                    <h1 class="num" data-target="50">
                                    999</h1>
                                </div>
                            </div>
                            <div class="Dashboard_progress">

                                <div class="number">
                                    <span id="hom-span" class="material-icons-sharp">person</span>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 hours</small>
                    </div>
                </div>
                <!----------------End Booking ----------------><div id="mybox">
                    <div class="TotalSeats">
                        
                        <div class="middle">
                            <div class="left">
                                <h3>Total Appointments</h3>
                                <div id="total_customers">
                                    <h1 class="num" data-target="20">
                                    999</h1>
                                </div>
                            </div>
                            <div class="Dashboard_progress">

                                <div class="number">
                                    <span id="hom-span" class="material-icons-sharp">calendar_month</span>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Last 24 hours</small>
                    </div>
                </div>
</div>
    </main>
     <?php 
        include ("./cred_navbar.php");
     ?>
          <!-- END OF TOP -->
          <div class="recent-updates">
            <h2>Recent Updates</h2>
            <div class="updates">
                <div class="update">
                    <div class="spprofile-photo">
                        <img src="" alt="">
                    </div>
                    <div class="message">
                        <p><b>luke</b>Donated 100miligrams of 
                                    blood Group B+</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="spprofile-photo">
                        <img src="" alt="">
                    </div>
                    <div class="message">
                        <p><b>Marry</b>Donated 100miligrams of 
                                    blood Group O-</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="spprofile-photo">
                        <img src="" alt="">
                    </div>
                    <div class="message">
                        <p><b>Sam</b>Donated 100miligrams of 
                                    blood Group AB</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
            </div>
          </div>
          <!----------------END OF RECENT UPDATES----------------->
          <div class="contact_Contravel">
            <h2>Contact Donors</h2>
                <div class="dashcon">
                    <div class="subject_div">
                        <h3>Subject:</h3>
                        <div class="right">
                            <div class="info">
                                <div class="icon">
                                    <span class="material-icons-sharp">subject</span>
                                </div>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                <div class="subject_div">
                    <h3>Message:</h3>
                    <div class="right">

                        <div class="info">
                            <div class="icon">
                                <span class="material-icons-sharp">mail</span>
                            </div>
                            <textarea name="" id="" cols="30" rows="5"></textarea>
                                
                        </div>
                                </br>
                                </br>
                                </br>
                               
                        <button class="btn btn-primary btn-block" name="submit">Send message</button>
                    </div>
                </div>
            </div>
          </div>
        </div>  
   
</div>
<script src="./Serviceprovider_js/Dashboard.js"></script>
<script>
    $('#grid_view').addClass('active');
    const counters = document.querySelectorAll(".num");

counters.forEach(counter => {
    let target = +counter.dataset.target;
    let step = 100;
    let dec = parseInt((999 - target) / step);
    let i = 0;

    function updateCount()
    {   
        console.log(i++);
        if(i === 1000) return;
        const curr = +counter.innerText;
        console.log(curr, target);
        if(curr > target)
        {
            counter.innerText = curr - dec;
            setTimeout(updateCount, 5);
        }
        else counter.innerText = target;
    }

    setTimeout(updateCount,900);

});
  </script>
  </body>
</html>
  
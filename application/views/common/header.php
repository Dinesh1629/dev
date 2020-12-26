<header class="header">
    <div class="text-center">
        <img src="<?php echo base_url();?>assets/img/god1.jpeg" alt=""  style="height: 138px;" class="float-left d-none d-lg-block">
        <img src="<?php echo base_url();?>assets/img/mmkj.jpeg" alt=""  style="height: 138px;" class="float-left d-none d-lg-block">
        <img src="<?php echo base_url();?>assets/img/namam.png" alt="" class="logo">
        <!-- <h1>Ahobilam</h1> -->
        <img src="<?php echo base_url();?>assets/img/god2.jpeg" alt="" style="height: 138px;" class="float-right d-none d-lg-block">
        <img src="<?php echo base_url();?>assets/img/jeer.jpg" alt="" style="height: 138px;" class="float-right d-none d-lg-block">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="nav-link d-block d-lg-none" href="<?php base_url('#');?>">Ahobilam</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?=(!$this->uri->segment(1) or $this->uri->segment(1)==='index' )?'active':''?>">
                <a class="nav-link" href="./welcome">Home</a>
            </li>
            <li class="nav-item <?=($this->uri->segment(1)==='ahobilam-kshetram')?'active':''?>">
                <a class="nav-link" href="./ahobilam-kshetram">Ahobilam Kshetram & Temple</a>
            </li>
           <!--  <li class="nav-item <?=($this->uri->segment(1)==='visit')?'active':''?>">
                <a class="nav-link" href="<?php echo base_url('visit');?>">Visiting / Tourism</a>
            </li> -->


            <li class="nav-item <?=($this->uri->segment(1)==='build')?'active':''?>">
              <!--   <a class="nav-link" href="./build">Building Ahobilam</a>-->
              <div class="dropdown">
                   <a class="nav-link" href="./build">Building Ahobilam</a>
                      <div class="dropdown-content">
                          <a href="./ahobilam-kshetram">Ahobilam </a>
                          <a href="./demo">festival</a>
                          <a href="./festival">festivsl</a>
                      </div>
                    </div>
            </li>


            <li class="nav-item <?=($this->uri->segment(1)==='festival')?'active':''?>">
                <a class="nav-link" href="./festival">Festivals</a>
            </li>
            <li class="nav-item <?=($this->uri->segment(1)==='projects')?'active':''?>">
                <a class="nav-link" href="./projects">Projects</a>
            </li>
             <li class="nav-item <?=($this->uri->segment(1)==='donation')?'active':''?>">
                <a class="nav-link" href="./donation">don</a>
            </li>
            <!-- <li class="nav-item <?=($this->uri->segment(1)==='online')?'active':''?>">
                <a class="nav-link" href="<?php echo base_url('online');?>">Online Services</a>
            </li> -->
            <li class="nav-item <?=($this->uri->segment(1)==='donations')?'active':''?>">
                <a class="nav-link" href="./donations">Donations</a>
            </li>
            <!-- <li class="nav-item <?=($this->uri->segment(1)==='contact')?'active':''?>">
                <a class="nav-link" href="<?php echo base_url('contact');?>">Contact us</a>
            </li> -->
            </ul>
        </div>
    </nav>
</header>

<style type="text/css">
    .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
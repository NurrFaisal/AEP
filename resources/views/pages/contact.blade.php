@section('title', 'Contact | AEAP')
@extends('layouts.layout')

@section('content')
<style>
        section {
            padding: 160px 0;
            min-height: 100vh;
        }
.contact-info {
  display: inline-block;
  width: 100%;
  text-align: center;
      margin-bottom: 10px;
}
.contact-info-icon {
margin-bottom: 15px;
}
.contact-info-item {
  background: #071c34;
  padding: 30px 0px;
  height: 230px;
}
.contact-page-sec .contact-page-form h2 {
  color: #ffffff;
  text-transform: capitalize;
  font-size: 22px;
  font-weight: 700;
}
.contact-page-form .col-md-6.col-sm-6.col-xs-12 {
  padding-left: 0;
}  
.contact-page-form.contact-form input {
  margin-bottom: 5px;
}  
.contact-page-form.contact-form textarea {
  height: 110px;
}
.contact-page-form.contact-form input[type="submit"] {
  background: #071c34;
  width: 150px;
  border-color: #071c34;
}
.contact-info-icon i {
  font-size: 48px;
  color: #fda40b;
}
.contact-info-text p{margin-bottom:0px;}
.contact-info-text h2 {
  color: #fff;
  font-size: 22px;
  text-transform: capitalize;
  font-weight: 600;
  margin-bottom: 10px;
}
.contact-info-text span {
  color: #999999;
  font-size: 16px;
  font-weight: ;
  display: inline-block;
  width: 100%;
}

.contact-page-form input {
  background: #f9f9f9 none repeat scroll 0 0;
  border: 1px solid #f9f9f9;
  margin-bottom: 20px;
  padding: 12px 16px;
  width: 100%;
  border-radius: 4px;
}

.contact-page-form .message-input {
display: inline-block;
width: 100%;
padding-left: 0;
}
.single-input-field textarea {
  background: #f9f9f9 none repeat scroll 0 0;
  border: 1px solid #f9f9f9;
  width: 100%;
  height: 120px;
  padding: 12px 16px;
  border-radius: 4px;
}
.single-input-fieldsbtn input[type="submit"] {
  background: #fda40b none repeat scroll 0 0;
  color: #fff;
  display: inline-block;
  font-weight: 600;
  padding: 10px 0;
  text-transform: capitalize;
  width: 150px;
  margin-top: 20px;
  font-size: 16px;
}
.single-input-fieldsbtn input[type="submit"]:hover{background:#071c34;transition: all 0.4s ease-in-out 0s;border-color:#071c34}
.single-input-field  h4 {
  color: #464646;
  text-transform: capitalize;
  font-size: 14px;
}
.contact-page-form {
  display: inline-block;
  width: 100%;
  margin-top: 30px;
}

.contact-page-map {
  margin-top: 36px;
}
.contact-page-form form {
    padding: 20px 15px 0;
}
.contact-info-icon svg{
  height: 50px;
}
.contact-info-icon svg path{
  fill: #ffffff;
}
</style>


<section class="contact-page-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-map-marked"></i>
              </div>
              <div class="contact-info-text">
                <h2>address</h2>
                <span>American Equipment & Parts <br>14861 Walmer street</span> 
                <span>Overland park, KS 66210 USA</span> 
              </div>
            </div>            
          </div>          
        </div>          
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-info-text">
                <h2>E-mail</h2>
                <span>sales@aep-usa.com</span> 
              </div>
            </div>            
          </div>                
        </div>                
        <div class="col-md-4">
          <div class="contact-info">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="contact-info-text">
                <h2>Connect</h2>
                <span>Telephone: (913) 406-1044</span>
                <span>Fax: (913) 393-1400</span>
              </div>
            </div>            
          </div>          
        </div>          
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="contact-page-form" method="post">
            <h2>Get in Touch</h2> 
            <form action="contact-mail.php" method="post">
              <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Your Name" name="name"/>
                </div>
              </div>  
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="email" placeholder="E-mail" name="email" required/>
                </div>
              </div>                              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Phone Number" name="phone"/>
                </div>
              </div>  
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input type="text" placeholder="Subject" name="subject"/>
                </div>
              </div>                
              <div class="col-md-12 message-input">
                <div class="single-input-field">
                  <textarea  placeholder="Write Your Message" name="message"></textarea>
                </div>
              </div>                                                
              <div class="single-input-fieldsbtn">
                <input type="submit" value="Send Now"/>
              </div>                          
            </div>
            </form>   
          </div>      
        </div>
        <div class="col-md-4">        
          <div class="contact-page-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d776.7152012226629!2d-94.66243467075218!3d38.85854314303821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0c199359f2fc5%3A0xdf0882816996ec32!2s14861%20Walmer%20St%2C%20Overland%20Park%2C%20KS%2066223%2C%20USA!5e0!3m2!1sen!2sbd!4v1662227362099!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>          
        </div>        
      </div>
    </div>
  </section>

@endsection
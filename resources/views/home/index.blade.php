@extends('layout.site')

@section('title', 'Learn to Code')

@section('content')

<div class="primary-content">

			<p class="intro">
        Gain a breathtaking insight into the world of web application development by joining our internal programming course. We will teach you the foundations of web application craftsmanship and with the help of our teaching assistants, you will be on the road to conquering the world in no time!
			</p>
			
      <a class="callout" href="#signup">Sign me up!</a>
    
      <div class="minihero" id="signup">
        
        <h2>Introduction to Web Development and Basic Programming</h2>
      
        <form action="/#signup" method="post">
          <div class="form-group">
            <label for="email">Email address:</label>
            <?php if (isset($errors)): ?>
              <?php foreach ($errors->getMessages()['email'] as $error): ?>
                <label style="color: #ffa949;"><?= $error ?></label>
              <?php endforeach; ?>
            <?php endif; ?>
            <?php if (isset($message)): ?>
                <label style="color: #ffa949;"><?= $message ?></label>
            <?php endif; ?>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <button type="submit" class="btn btn-default">Enroll</button>
        </form>
      
      </div>

		</div>

		<div class="secondary-content group"> 
     
      <div class="internal-content-one">
     
        <h3>Aims</h3>
        <p>
          Throughout the course we aim to:
        </p>
        <ul>
          <li>Introduce the systems / architecture on which modern web applications (websites) run.</li>
          <li>Enable students to build their own basic web applications.</li>
        </ul>		
     
      </div>
      
      <div class="internal-content-two">
     
        <h3>Overview</h3>
        <p>
          Web Development is concerned with the creation of applications that run within a browser on the world wide web. These applications range from anything such a personal website (blog, portfolio, etc) to a large scale complex website such as Facebook. Most of the fundamental underlying technology that is used to build these web applications is shared between them. In this course we will be learning about these technologies, how they work and how to use them.
        </p>
     
      </div>
		
    </div>

    <div class="secondary-content group b-border"> 
    
      <div class="internal-content-one">
    
        <h3>Teaching Methods</h3>
        <ul>
          <li>Lectures: every session there will be a short talk, probably somewhere in the region of 20 minutes long that will introduce you to the content and basic principals.</li>
          <li>Labs: this is where you will get the opportunity to implement what you have learnt. There will be teaching assistants available for you to ask any questions to and get help from.</li>
          <li>Project: this will be self study time where you will work as a pair / in a small group to build a simple web application.</li>
        </ul>   
    
      </div>
      
      <div class="internal-content-two">
    
        <h3>Syllabus</h3>
        <h4>Topics Covered</h4>
        <ul>
          <li>Background: The Web and its Infrastructure</li>
          <li>HTML (Hyper Text Mark Up Language)</li>
          <li>CSS (Cascading Style Sheets)</li>
          <li>Basic Programming</li>
        </ul>
   
      </div>
   
    </div>

@endsection
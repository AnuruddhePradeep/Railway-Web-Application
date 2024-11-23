<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;

            background-image: url('checkout-train.png');
            background-size: cover;
            background-repeat: no-repeat;
      
        }

        .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .feedback {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
            width: 48%;
        }

        .feedback .content {
            flex-grow: 1;
        }

        .feedback .user {
            display: flex;
            align-items: center;
        }

        .feedback .user img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .feedback .user .name {
            font-weight: bold;
        }

        .feedback .user .role {
            color: #777;
            font-size: 14px;
        }

        .feedback .rating {
            display: flex;
            align-items: center;
        }

        .feedback .rating .star {
            color: #ffc107;
            font-size: 16px;
            margin-right: 2px;
        }




        /* 2nd CSS */


.container2 {
  display: flex;
  flex-direction: column;
  width: 300px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.user {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.user img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
}

.user .name {
  font-weight: bold;
  font-size: 16px;
}

.user .date {
  font-size: 14px;
  color: #666;
  margin-left: auto;
}

.content {
  margin-bottom: 10px;
}

.actions {
  display: flex;
  justify-content: flex-end;
}

.actions button {
  background-color: #4CAF50;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}



/*button*/



.container3 {
            display: flex;
            justify-content: space-around;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            background-color: #004080;
            color: #FFD700;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }






    </style>
</head>
<body>
    <div class="container1">
        <h1>Feedbacks</h1>
        <div class="feedback">
            <div class="content">
                <p>Booking my train tickets has never been easier, great user experience!</p>
            </div>
            <div class="user">
                <img src="avatar1.png" alt="">
                <div>
                    <p class="name">Jamie Lannister</p>
                    <p class="role">Vlogger</p>
                </div>
            </div>
            <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
            </div>
        </div>
        <div class="feedback">
            <div class="content">
                <p>The interface is clean and simple to use, even for complex booking schedules.</p>
            </div>
            <div class="user">
                <img src="avatar2.png" alt="">
                <div>
                    <p class="name">Alexis Johnson</p>
                    <p class="role">Traveller</p>
                </div>
            </div>
            <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
            </div>
        </div>
        <div class="feedback">
            <div class="content">
                <p>Real-time updates and notifications are super helpful for my travel planning.</p>
            </div>
            <div class="user">
                <img src="avatar3.png" alt="">
                <div>
                    <p class="name">Rajesh Kumar</p>
                    <p class="role">Youtube Vlogger</p>
                </div>
            </div>
            <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
            </div>
        </div>
        <div class="feedback">
            <div class="content">
                <p>The booking process was straightforward, and the customer service was excellent. Highly recommended!</p>
            </div>
            <div class="user">
                <img src="avatar4.png" alt="">
                <div>
                    <p class="name">Morgan Avery</p>
                    <p class="role">Travel Blogger</p>
                </div>
            </div>
            <div class="rating">
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
                <span class="star">★</span>
            </div>
        </div>









        <div class="container2">
            <div class="user">
              <img src="avatar5.png" alt="Michael Gough">
              <div>
                <span class="name">Michael Gough</span>
                <span class="date">Feb. 8, 2022</span>
              </div>
            </div>
            <div class="content">
              The booking process is so smooth and intuitive. I was able to book a round trip without any
              hassle. Great job on the user interface!
            </div>
            <div class="actions">
              <button>Reply</button>
            </div>
          </div>
    
          
          
          <div class="container2">
            <div class="user">
              <img src="avatar6.png" alt="Jese Leos">
              <div>
                <span class="name">Jese Leos</span>
                <span class="date">Feb. 12, 2022</span>
              </div>
            </div>
            <div class="content">
              I appreciate the real-time updates on train schedules. It helps me plan my journey much better.
              Kudos to the development team!
            </div>
            <div class="actions">
              <button>Reply</button>
            </div>
          </div>
    
          
          <div class="container2">
            <div class="user">
              <img src="avatar7.png" alt="Bonnie Green">
              <div>
                <span class="name">Bonnie Green</span>
                <span class="date">Mar. 12, 2022</span>
              </div>
            </div>
            <div class="content">
              Had an issue with my booking and the customer service resolved it promptly. Thanks for the
              quick and courteous service!
            </div>
            <div class="actions">
              <button>Reply</button>
            </div>
          </div>
    
          
          
          <div class="container2">
            <div class="user">
              <img src="avatar8.png" alt="Helene Engels">
              <div>
                <span class="name">Helene Engels</span>
                <span class="date">Jun. 23, 2022</span>
              </div>
            </div>
            <div class="content">
              The discount offers section is a fantastic feature! Made use of a great deal for my last-minute
              travel plans. Highly recommended!
            </div>
            <div class="actions">
              <button>Reply</button>
            </div>
          </div>



          <div class="container3">
            <div class="button-container">
               
                <a href="Feedback.html" class="button-container"><button>Back</button></a>
                
            </div>
    </div>












    

      <p></br></br></br></p>
</body>
</html>
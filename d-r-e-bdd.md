Table users as U {
  id int [pk, increment]
  firstname varchar
  email varchar [unique]
  roles json
  password varchar
  created_at datetime [default: `now()`]
}

Table testimonial as T {
  id int [pk, increment]
  user_id int
  name varchar
  message text
  rating int
  created_at datetime [note: 'CURRENT_TIMESTAMP']
  validated BOOLEAN [DEFAULT: 'FALSE']
}

Table formcontact as FC{
  id int [pk, increment]  
  name varchar
  email varchar
  message text
  sent_on datetime [default: `now()`]
}


Table carcontact as CC {
  id int [pk, increment]
  car_id varchar [note: 'OBTEINED_FROM_API']
  name varchar
  email varchar
  message text
  sent_on datetime [default: `now()`]
}


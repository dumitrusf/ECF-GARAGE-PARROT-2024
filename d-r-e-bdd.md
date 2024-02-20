⭐⭐⭐ dbdiagrams

Table users as U {
  id int [pk, increment]
  name varchar
  email varchar [unique]
  roles json
  password varchar
  created_at datetime [default: `now()`]
}

Table testimonial as T {
  id int [pk, increment]
  user_id int                         // FK a users.id
  name varchar
  message text
  rating int
  created_at datetime [note: 'CURRENT_TIMESTAMP']
  validated BOOLEAN [DEFAULT: 'FALSE']
}

Table formcontact as FC{
  id int [pk, increment]  
  user_id int                         // FK a users.id, NULLABLE
  name varchar
  email varchar
  message text
  sent_on datetime [default: `now()`]
}

Table carcontact as CC {
  id int [pk, increment]
  car_id varchar [note: 'OBTAINED_FROM_API']
  user_id int                         // FK a users.id, NULLABLE
  name varchar
  email varchar
  message text
  sent_on datetime [default: `now()`]
}

Table Services as S {
  id int [pk, increment]
  name varchar
  description text
  created_at DATETIME
  updated_at DATETIME 
}

Table cars as C {
  id INT [PK, increment]              
  user_id INT                         // FK a users.id, quién añadió o modificó el coche
  brand VARCHAR
  model VARCHAR
  year INT
  price DECIMAL
  kilometer INT
  description TEXT
  image VARCHAR
  status ENUM('for sale', 'sold', 'on repair')
  created_at DATETIME
  updated_at DATETIME
}

// Relaciones
Ref: T.user_id > U.id
Ref: FC.user_id > U.id
Ref: CC.user_id > U.id
Ref: C.user_id > U.id


⭐⭐⭐


Table users as U {
  id int [pk, increment]
  name varchar
  email varchar [unique]
  roles json
  password varchar
  created_at datetime [default: `now()`]
}

Table cars as C {
  id INT [PK, increment]              
  user_id INT                         
  brand VARCHAR
  model VARCHAR
  year INT
  price DECIMAL
  kilometer INT
  description TEXT
  image VARCHAR
  status ENUM('for sale', 'sold', 'on repair')
  created_at DATETIME
  updated_at DATETIME
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
  user_id int                         
  name varchar
  email varchar
  message text
  sent_on datetime [default: `now()`]
}

Table carcontact as CC {
  id int [pk, increment]
  car_id varchar [note: 'OBTAINED_FROM_API']
  user_id int                         
  name varchar
  email varchar
  message text
  sent_on datetime [default: `now()`]
}

Table Services as S {
  id int [pk, increment]
  name varchar
  description text
  created_at DATETIME
  updated_at DATETIME 
}


// Relaciones
Ref: T.user_id > U.id
Ref: FC.user_id > U.id
Ref: CC.user_id > U.id
Ref: C.user_id > U.id

⭐ not too much time to do this

so with orm


CREATE TABLE bands (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
    tijd VARCHAR(100) NOT NULL,
  duurt VARCHAR(100) NOT NULL,
  antaalleden VARCHAR(100) NOT NULL,

  genre VARCHAR(100),
  herkomst VARCHAR(100),
  sets int(11),
  contact_email VARCHAR(100),
  contact_phone VARCHAR(20)
);

CREATE TABLE events (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  date DATE NOT NULL,
  time TIME NOT NULL,
    naam TIME NOT NULL,

  email TIME NOT NULL,);

CREATE TABLE bands_has_event (
  id INT PRIMARY KEY AUTO_INCREMENT,
  band_id INT,
  event_id INT,
  time TIME,
  FOREIGN KEY (band_id) REFERENCES bands(id),
  FOREIGN KEY (event_id) REFERENCES events(id)
);

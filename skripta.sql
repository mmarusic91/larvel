DROP TABLE IF EXISTS clanak;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS kategorija;


CREATE TABLE user (
  id INT not NULL AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR (255) NOT NULL,
  prezime VARCHAR (255) NOT NULL,
  email VARCHAR (255) NOT NULL,
  pass VARCHAR (255) NOT NULL
) ENGINE=innoDB;

CREATE TABLE kategorija (
  id INT not NULL AUTO_INCREMENT PRIMARY KEY,
  naziv VARCHAR (255) NOT NULL
) ENGINE=innoDB;

CREATE TABLE clanak (
  id INT not NULL AUTO_INCREMENT PRIMARY KEY,
  naslov VARCHAR (255) NOT NULL,
  tekst TEXT NOT NULL,
  datum DATE NOT NULL,
  kategorija INT NOT NULL,
  autor INT NOT NULL
) ENGINE=innoDB;

ALTER TABLE clanak ADD FOREIGN KEY (kategorija) REFERENCES kategorija (id);
ALTER TABLE clanak ADD FOREIGN KEY (autor) REFERENCES user (id);

INSERT INTO kategorija (naziv)
VALUES ("znanost"), ("politika");
INSERT INTO user (ime, prezime, email, pass)
VALUES ("ivo", "josipovic", "ivojoso@gmail.com", md5("yugo45")),
  ("satoshi", "nakamoto", "sana@gmail.com", md5("btcforever"));
INSERT INTO clanak (naslov, tekst, datum, kategorija, autor)
VALUES ("Aktualno", "Pala bomba u Abudabiju.", "2018-02-01", 1, 1),
  ("Filozofija", "Kokoš ili jaje? Jaje.", "2018-02-01", 1, 1),
  ("Čavoglave", "Odakle si? S koje fronte stižeš? Prika, ja sam ti duša hrvatskih ratnika.", "2018-02-01", 1, 1),
  ("Hasanaginica", "Što se to bijeli u gori zelenoj? Nisu ni snijezi ni labudovi.", "2018-02-01", 1, 1),
  ("Korisno", "Ako se uvijeriš nakon buđenja da si se naspavao, osjećaćeš se mnogo naspavanije.", "2018-02-01", 1, 1),
  ("Kuharica", "Kako napraviti napalm? Lako. Stiropor i benzin.", "2018-02-01", 1, 1);
CREATE TABLE tb_gatos (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(100) NOT NULL,        
    sexo ENUM('Macho', 'Fêmea') NOT NULL, 
    cor_pelo VARCHAR(50) NOT NULL,    
    cor_olhos VARCHAR(50),            
    tm_pelagem ENUM('Curta', 'Média', 'Longa') NOT NULL, 
    dt_nasc_aprox DATE,               
    dt_resgate DATE NOT NULL,         
    desc_detalhada TEXT               
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE tb_gatos ADD COLUMN foto VARCHAR(255) DEFAULT NULL;

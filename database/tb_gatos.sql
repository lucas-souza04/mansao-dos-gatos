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

ALTER TABLE tb_gatos ADD COLUMN foto LONGBLOB DEFAULT NULL;

ALTER TABLE tb_gatos ADD COLUMN adotado BOOLEAN DEFAULT FALSE;

INSERT INTO tb_gatos (nome, sexo, cor_pelo, cor_olhos, tm_pelagem, dt_nasc_aprox, dt_resgate, desc_detalhada, foto)
VALUES 
('Mingau', 'Macho', 'Branco', 'Azul', 'Curta', '2023-03-01', '2024-02-15', 'Gato muito calmo e carinhoso, sempre procura carinho e atenção. Ele é muito sociável com outros animais e adora brincar com crianças. Sua pelagem é macia e brilhante, tornando-o uma ótima companhia para qualquer família. É um ótimo parceiro para momentos de relaxamento e lazer. Seu comportamento tranquilo torna-o ideal para ambientes tranquilos e silenciosos.', '../assets/images/gatos/Mingau.png'),
('Tigrão', 'Macho', 'Laranja', 'Verde', 'Curta', '2022-05-14', '2024-01-10', 'Tigrão é um gato cheio de energia e sempre está em movimento. Ele adora correr e brincar com brinquedos. É uma excelente companhia para quem gosta de gatos ativos e brincalhões. Sua pelagem laranja é vibrante e ele possui um olhar encantador. Embora seja muito independente, adora atenção de vez em quando.', '../assets/images/gatos/Tigrao.png'),
('Luna', 'Fêmea', 'Preto', 'Amarelo', 'Longa', '2021-08-07', '2023-12-05', 'Luna é uma gata tranquila e cheia de personalidade. Ela adora ficar sozinha por longos períodos, mas também aprecia momentos de carinho e afeto. Sua pelagem preta e suave combina perfeitamente com seus olhos amarelos e penetrantes. Ela não gosta de barulho, então prefere ambientes calmos. Ideal para quem procura uma gata independente e serena.', '../assets/images/gatos/Luna.png'),
('Bella', 'Fêmea', 'Cinza', 'Verde', 'Curta', '2022-09-11', '2024-02-01', 'Bella é uma gata muito doce, com um temperamento calmo e gentil. Ela adora passar horas deitada, relaxando no colo de alguém. Sua pelagem cinza é macia e fácil de cuidar. Bella gosta de passeios curtos ao ar livre, mas também se sente confortável dentro de casa. Seu comportamento carinhoso e meigo a torna perfeita para quem procura uma gata amorosa.', '../assets/images/gatos/Bella.png'),
('Mimi', 'Fêmea', 'Branca com Preto', 'Azul', 'Média', '2020-06-20', '2024-01-15', 'Mimi é uma gata muito sociável, que adora estar perto das pessoas. Ela gosta de receber carinho e pode passar horas sendo acariciada. Sua pelagem branca com preto é lindíssima, e ela tem olhos azuis que encantam a todos. Mimi também adora brincar, especialmente com outros gatos. Ela é a gata perfeita para quem busca uma companheira alegre e amorosa.', '../assets/images/gatos/Mimi.png'),
('Pepper', 'Macho', 'Cinza', 'Verde', 'Longa', '2021-11-03', '2023-11-20', 'Pepper é um gato de personalidade calma e adorável. Ele gosta de passar seu tempo em locais tranquilos, mas adora receber carinho quando está no seu espaço. Sua pelagem cinza é macia e ele tem olhos verdes encantadores. Pepper adora a companhia de outros gatos e é muito sociável. Ideal para quem procura um gato tranquilo e afetivo.', '../assets/images/gatos/Pepper.png'),
('Shadow', 'Macho', 'Preto', 'Amarelo', 'Curta', '2023-02-28', '2024-02-01', 'Shadow é um gato mais discreto, mas com uma grande personalidade. Ele prefere ambientes mais silenciosos, mas se você ganhar a confiança dele, vai receber todo o carinho que ele tem a oferecer. Sua pelagem preta e seus olhos amarelos o tornam muito elegante. Shadow é ideal para quem busca um gato mais calmo e introspectivo.', '../assets/images/gatos/Shadow.png'),
('Nina', 'Fêmea', 'Branca', 'Azul', 'Longa', '2022-12-15', '2024-01-20', 'Nina é uma gata muito carinhosa, especialmente com crianças. Ela adora brincar com outros gatos e se diverte bastante durante os momentos de interação. Sua pelagem branca é suave, e seus olhos azuis a tornam irresistível. Nina é ideal para famílias que procuram uma gata divertida e afetuosa.', '../assets/images/gatos/Nina.png'),
('Bento', 'Macho', 'Laranja', 'Verde', 'Curta', '2021-07-25', '2023-12-10', 'Bento é um gato muito ativo e curioso. Ele adora explorar cada canto da casa e é muito brincalhão. Sua pelagem laranja é vibrante e ele tem olhos verdes brilhantes. Bento gosta de estar rodeado de pessoas, mas também gosta de suas horas de descanso. Ele é perfeito para quem busca um gato enérgico e amigável.', '../assets/images/gatos/Bento.png'),
('Malu', 'Fêmea', 'Preta', 'Amarela', 'Média', '2020-02-05', '2023-11-25', 'Malu é uma gata muito tranquila e independente. Ela gosta de passar o tempo sozinha, mas sempre está pronta para uma boa sessão de carinho. Sua pelagem preta e seus olhos amarelos são encantadores. Malu não gosta de agitação, então ela é perfeita para quem busca uma gata serena e silenciosa. Ideal para quem mora em ambientes tranquilos.', '../assets/images/gatos/Malu.png'),
('Rex', 'Macho', 'Cinza', 'Verde', 'Curta', '2021-04-14', '2024-01-05', 'Rex é um gato carinhoso e muito brincalhão. Ele adora correr pela casa e brincar com brinquedos. Sua pelagem cinza é macia e seus olhos verdes são muito expressivos. Rex é sociável e adora companhia, tanto de pessoas quanto de outros animais. Ele é perfeito para quem quer um gato ativo e carinhoso.', '../assets/images/gatos/Rex.png'),
('Flora', 'Fêmea', 'Branca com Amarelo', 'Azul', 'Longa', '2022-10-30', '2023-12-12', 'Flora é uma gata muito calma e serena. Ela gosta de passar seus dias relaxando em espaços tranquilos e está sempre em busca de momentos de paz. Sua pelagem branca com amarelo é deslumbrante e seus olhos azuis a tornam ainda mais encantadora. Flora é perfeita para quem procura uma gata calma e introspectiva, ideal para um ambiente tranquilo.', '../assets/images/gatos/Flora.png');
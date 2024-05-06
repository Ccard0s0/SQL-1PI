CREATE TABLE IF NOT EXISTS Alunos (
    ID INTEGER PRIMARY KEY,
    Nome TEXT,
    Idade INTEGER,
    Classe INTEGER,
    Nota REAL
);

DELETE FROM Alunos;

INSERT INTO Alunos (Nome, Idade, Classe, Nota) VALUES 
('Lara Pires', 16, 10, 85.5),
('Tomás', 15, 10, 78.9),
('Caroll', 17, 10, 65.4),
('Abdaisy', 18, 10, 65.4),
('Jean', 20, 10, 65.4),
('Sofia', 18, 10, 65.4),
('Guilherme', 16, 10, 65.4),
('Elson', 16, 10, 65.4);

SELECT * FROM Alunos;

-- Selecionar alunos com idade superior a 17
SELECT * FROM Alunos
WHERE Idade > 17;
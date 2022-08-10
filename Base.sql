ALTER TABLE ville
ADD CONSTRAINT FK_VillePays
FOREIGN KEY (idpays) REFERENCES pays(id);

ALTER TABLE employe
ADD CONSTRAINT FK_EmployeVille
FOREIGN KEY (idville) REFERENCES ville(id);

ALTER TABLE employe
ADD CONSTRAINT FK_EmployePoste
FOREIGN KEY (idposte) REFERENCES poste(id);

ALTER TABLE demandeconge
ADD CONSTRAINT FK_NatureConge
FOREIGN KEY (idnatureconge) REFERENCES nature(id);

ALTER TABLE demandeconge
ADD CONSTRAINT FK_EmployeDemande
FOREIGN KEY (idemploye) REFERENCES employe(id);

ALTER TABLE validation_demande_user
ADD CONSTRAINT FK_Demande
FOREIGN KEY (iddemandeconge) REFERENCES demandeconge(id);

ALTER TABLE validation_demande_user
ADD CONSTRAINT FK_EmployeValidateur
FOREIGN KEY (idemployevalidateur) REFERENCES employe(id);
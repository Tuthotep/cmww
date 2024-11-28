SELECT t_massas.*, t_paises.*, t_contis.*
FROM t_massas
LEFT JOIN t_paises ON t_massas.paisid = t_paises.id_pais
LEFT JOIN t_contis ON t_paises.contiid = t_contis.id_conti
====================================================================================================
SELECT t_massas.ciudad,t_massas.hora,t_massas.lugar, t_paises.pais, t_contis.conti 
FROM t_massas
LEFT JOIN t_paises ON t_massas.paisid = t_paises.id_pais
LEFT JOIN t_contis ON t_paises.contiid = t_contis.id_conti
====================================================================================================
SELECT paisid, COUNT(*)
FROM t_massas 
GROUP BY paisid	
====================================================================================================
SELECT * 
FROM `t_massas` 
WHERE `img_lugar` = ' ' AND `paisid` = 1
====================================================================================================
SELECT `id_massa`, `ciudad`, `paisid`, `pais`
FROM `t_massas`
LEFT JOIN t_paises ON t_massas.paisid = t_paises.id_pais
LEFT JOIN t_contis ON t_paises.contiid = t_contis.id_conti
GROUP BY paisid
====================================================================================================
SELECT paisid, O.pais, E.conti
FROM t_massas C, t_paises O, t_contis E
WHERE C.paisid = O.id_pais AND O.contiid = E.id_conti
GROUP BY O.pais
====================================================================================================
SELECT p.pais, COUNT(m.id_massa) AS Massas 
FROM t_paises p LEFT JOIN t_massas m ON p.id_pais = m.paisid 
GROUP BY p.pais 
ORDER BY p.pais ASC
====================================================================================================
####################################################################################################
====================================================================================================
INSERT INTO `t_massas` (`id_massa`, `ciudad`, `paisid`, `hora`, `lugar`, `coord`, `web`, `face`, `twitter`, `insta`, `tiktok`, `telegram`, `whatsapp`, `logo_massa`, `img_lugar`, `comentarios`) VALUES 
(NULL, '', '', '', '', '', '', '', '', '', '', '', '', '../img/wcdi.jpg', '../img/wcdi.jpg', '')
====================================================================================================
INSERT INTO `t_paises` (`id_pais`, `pais`, `contiid`, `comentp`)
VALUES (NULL, 'Tanzania', '1', '');
====================================================================================================
####################################################################################################
====================================================================================================
UPDATE t_massas SET logo_massa = '../img/es/mc-acruna.png', ciudad = 'A Coru�a', hora = 'Primer Viernes - 20:00hs', lugar = 'Praza da Maria Pita', coord = 'https://maps.app.goo.gl/mBnrtuGFgzSaVDaj7', web = '', face = 'https://es-la.facebook.com/masacriticacoruna/', twitter= 'https://twitter.com/mc_coruna', insta = 'fa', tiktok = 'fa', telegram = 'ga', whatsapp = 'ga', comentarios = 'ga', img_lugar = '../img/es/acruna/meetpoint.jpg' WHERE `t_massas`.`id_massa` = '4'
====================================================================================================
(NULL, '', '', '', '', '', '', '', '', '', '', '', '', '../img//mc-.png', '../img/wcdi.jpg', ''),


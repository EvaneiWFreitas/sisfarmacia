CREATE TABLE tb_usuarios(
    id               int(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome             VARCHAR(512)NULL,
    ap_paterno       VARCHAR(512)NULL,
    ap_materno       VARCHAR(512)NULL,
    rg               VARCHAR(512)NULL,
    cpf              VARCHAR(512)NULL,
    data_nasc        VARCHAR(512)NULL,
    pais             VARCHAR(512)NULL,
    celular          VARCHAR(512)NULL,
    cep              VARCHAR(512)NULL,
    foto_perfil      TEXT NULL,
    email            VARCHAR(512)NULL,
    senha            VARCHAR(512)NULL,
    token            VARCHAR(512)NULL,
    cargo            VARCHAR(512)NULL,
    extra1           VARCHAR(512)NULL,
    extra2           VARCHAR(512)NULL,
    extra3           VARCHAR(512)NULL,
    user_criador     VARCHAR(512)NULL,
    user_atualizacao VARCHAR(512)NULL,
    user_exclusao    VARCHAR(512)NULL,
    data_criacao     DATETIME NULL,
    data_atualizacao DATETIME NULL,
    data_exclusao    DATETIME NULL,
    estado           VARCHAR(255)NULL

);

INSERT INTO `tb_usuarios` (`id`, `nome`, `ap_paterno`, `ap_materno`, `rg`, `cpf`, `data_nasc`, `pais`, `celular`, `cep`, `foto_perfil`, `email`, `senha`, `token`, `cargo`, `extra1`, `extra2`, `extra3`, `user_criador`, `user_atualizacao`, `user_exclusao`, `data_criacao`, `data_atualizacao`, `data_exclusao`, `estado`) VALUES (NULL, 'Evanei Freitas', 'Freitas', 'Nascimento', '088902275', '01419502778', '15/10/1968', 'Brasil', '21994160998', '25565020', 'ney.jpg', 'prwilliannascimento@hotmail.com', '123', NULL, 'Administrador', NULL, NULL, NULL, 'Evanei Freitas', NULL, NULL, '2025-05-01 15:50:27', NULL, NULL, '1');

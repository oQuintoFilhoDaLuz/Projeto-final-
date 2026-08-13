CREATE TABLE [dbo].[Usuarios] (
    [UsuarioID]    INT           IDENTITY (1, 1) NOT NULL,
    [EmpresaID]    INT           NOT NULL,
    [Nome]         VARCHAR (100) NOT NULL,
    [Email]        VARCHAR (120) NOT NULL,
    [SenhaHash]    VARCHAR (255) NOT NULL,
    [Perfil]       VARCHAR (30)  NOT NULL,
    [Setor]        VARCHAR (50)  DEFAULT ('Geral') NOT NULL,
    [Ativo]        BIT           DEFAULT ((1)) NULL,
    [DataCadastro] DATETIME      DEFAULT (getdate()) NULL,
    PRIMARY KEY CLUSTERED ([UsuarioID] ASC),
    CHECK ([Perfil]='Suporte_Master' OR [Perfil]='Suporte_NVL_2' OR [Perfil]='Suporte_NVL_1' OR [Perfil]='Gerente' OR [Perfil]='SOLICITANTE')
);
GO

ALTER TABLE [dbo].[Usuarios]
    ADD CONSTRAINT [UQ_Email_Empresa] UNIQUE NONCLUSTERED ([Email] ASC, [EmpresaID] ASC);
GO

ALTER TABLE [dbo].[Usuarios]
    ADD CONSTRAINT [FK_Usuarios_Empresas] FOREIGN KEY ([EmpresaID]) REFERENCES [dbo].[Empresas] ([EmpresaID]);
GO


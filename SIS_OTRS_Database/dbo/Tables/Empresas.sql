CREATE TABLE [dbo].[Empresas] (
    [EmpresaID]     INT           IDENTITY (1, 1) NOT NULL,
    [NomeEmpresa]   VARCHAR (150) NOT NULL,
    [CNPJ]          VARCHAR (20)  NULL,
    [CodigoEmpresa] VARCHAR (50)  NOT NULL,
    [CorTemaHex]    VARCHAR (10)  DEFAULT ('#1351B4') NOT NULL,
    [LogoURL]       VARCHAR (255) NULL,
    [Ativo]         BIT           DEFAULT ((1)) NULL,
    [DataCadastro]  DATETIME      DEFAULT (getdate()) NULL,
    PRIMARY KEY CLUSTERED ([EmpresaID] ASC),
    UNIQUE NONCLUSTERED ([CNPJ] ASC),
    UNIQUE NONCLUSTERED ([CodigoEmpresa] ASC)
);
GO


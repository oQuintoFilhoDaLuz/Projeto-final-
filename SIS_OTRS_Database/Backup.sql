-- 1. CRIAR BANCO DE DADOS (Se não existir)
IF NOT EXISTS (SELECT name FROM sys.databases WHERE name = N'SIS_OTRS')
BEGIN
    CREATE DATABASE SIS_OTRS;
    PRINT 'Banco SIS_OTRS criado com sucesso.';
END
GO

USE SIS_OTRS;
GO

-- 2. TABELA DE EMPRESAS
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Empresas]') AND type in (N'U'))
BEGIN
    CREATE TABLE Empresas (
        EmpresaID INT IDENTITY(1,1) PRIMARY KEY,
        NomeEmpresa VARCHAR(150) NOT NULL,
        CNPJ VARCHAR(20) UNIQUE,
        CodigoEmpresa VARCHAR(50) UNIQUE NOT NULL,
        CorTemaHex VARCHAR(10) NOT NULL DEFAULT '#1351B4',
        LogoURL VARCHAR(255) NULL,
        Ativo BIT DEFAULT 1,
        DataCadastro DATETIME DEFAULT GETDATE()
    );
    PRINT 'Tabela Empresas criada.';
END
GO

-- 3. TABELA DE USUÁRIOS
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Usuarios]') AND type in (N'U'))
BEGIN
    CREATE TABLE Usuarios (
        UsuarioID INT IDENTITY(1,1) PRIMARY KEY,
        EmpresaID INT NOT NULL,
        Nome VARCHAR(100) NOT NULL,
        Email VARCHAR(120) NOT NULL,
        SenhaHash VARCHAR(255) NOT NULL,
        Perfil VARCHAR(30) NOT NULL CHECK (Perfil IN ('SOLICITANTE', 'Gerente', 'Suporte_NVL_1', 'Suporte_NVL_2', 'Suporte_Master')),
        Setor VARCHAR(50) NOT NULL DEFAULT 'Geral',
        Ativo BIT DEFAULT 1,
        DataCadastro DATETIME DEFAULT GETDATE(),
        CONSTRAINT FK_Usuarios_Empresas FOREIGN KEY (EmpresaID) REFERENCES Empresas(EmpresaID),
        CONSTRAINT UQ_Email_Empresa UNIQUE (Email, EmpresaID)
    );
    PRINT 'Tabela Usuarios criada.';
END
GO
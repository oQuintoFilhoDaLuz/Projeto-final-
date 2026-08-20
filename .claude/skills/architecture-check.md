---
description: Garante a separação estrita de pastas FrontEnd, BackEnd e SIS_OTRS_Database
---

# Skill: architecture-check

## Descrição

Garante que a alocação de arquivos siga a responsabilidade técnica e previne a criação indevida de diretórios.

## Diretrizes de Alocação

- **FrontEnd/**: Exclusivo para interface, UI, telas, estilos (`Css/`), interações visuais (`js/`) e mídias (`Imagens/`).
- **BackEnd/**: Lógica de negócios, validações, APIs e scripts de processamento.
- **SIS_OTRS_Database/**: Apenas scripts SQL, schemas e projetos de banco OTRS.
- **Bloqueio**: Proibido criar novas pastas ou alterar a grafia das pastas existentes.

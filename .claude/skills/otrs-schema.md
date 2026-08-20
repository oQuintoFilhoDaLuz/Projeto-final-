---
description: Mapeia os esquemas, tabelas e scripts SQL na pasta SIS_OTRS_Database
---

# Skill: otrs-schema

## Descrição

Mapeia os modelos, tabelas e scripts SQL armazenados na pasta de banco de dados.

## Regras de Operação

1. Ler os esquemas contidos em `SIS_OTRS_Database/`.
2. Validar se os campos enviados pelos scripts de `BackEnd/` coincidem com os nomes de colunas e tipos de dados do OTRS.

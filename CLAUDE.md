# CLAUDE.md - Guia de Desenvolvimento

## 1. Regras Estritas de Estrutura e Subpastas

- **Proibição Total de Novas Pastas:** NUNCA crie novos diretórios ou subpastas em nenhum nível do projeto sem autorização prévia e explícita.
- **Alocação Exata em Subdiretórios:** Os arquivos novos devem ser colocados diretamente dentro da subpasta correspondente ao seu tipo:
  - **Estilos:** `FrontEnd/Css/` (arquivos `.css`)
  - **Scripts de Interface:** `FrontEnd/js/` (arquivos `.js`)
  - **Midias e Mídia Visual:** `FrontEnd/Imagens/`
  - **Páginas e Views:** Dentro de `FrontEnd/` (ex: `index.php`, `Tela_incial.php`)
  - **Regras de Negócio e Processamento:** Dentro de `BackEnd/`
  - **Banco de Dados e Modelagem:** Dentro de `SIS_OTRS_Database/`
- **Respeito ao Case-Sensitivity:** Mantenha exatamente a grafia de maiúsculas e minúsculas dos diretórios existentes (`FrontEnd`, `BackEnd`, `Css`, `js`, etc.).

## 2. Padronização de Código (Referência: `FrontEnd/index.php`)

- **Gabarito Visual e Lógico:** O arquivo `FrontEnd/index.php` é o modelo oficial de estilo, indentação, boas práticas e organização para qualquer novo código PHP ou HTML.
- **Consistência:** Mantenha a mesma estrutura de imports, chamadas de scripts e estilo de comentários observados no `index.php`.

## 3. Comandos Operacionais

- **Servidor Local (PHP):** `php -S localhost:3000 -t FrontEnd`
- **Acesso Web:** `http://localhost:3000/`
- **Validação de Sintaxe:** `php -l FrontEnd/index.php`

## 4. Workflow de Git

- **Branches:** Padrão `agents/<nome-da-funcionalidade>`.
- **Commits:** Mensagens objetivas em português descrevendo a alteração.

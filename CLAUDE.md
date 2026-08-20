# CLAUDE.md - Guia de Desenvolvimento

## 1. Regras Estritas de Estrutura e Responsabilidade

- **Proibição Total de Novas Pastas:** NUNCA crie novos diretórios ou subpastas em nenhum nível do projeto sem autorização prévia e explícita do usuário.
- **Alocação por Função (Não por Extensão):**
  - **`FrontEnd/`:** Exclusivo para interface, renderização de UI, navegação e manipulação de DOM.
    - `FrontEnd/Css/` $\rightarrow$ Estilos e temas visuais.
    - `FrontEnd/js/` $\rightarrow$ Scripts de comportamento da interface e eventos de tela.
    - `FrontEnd/Imagens/` $\rightarrow$ Recursos visuais e mídias.
  - **`BackEnd/`:** Toda a lógica de negócios, regras de processamento, validação de dados, rotas de API, conectores e scripts de integração (independente de ser PHP, Node/JS ou outro runtime).
  - **`SIS_OTRS_Database/`:** Schemas, scripts SQL e modelagem do banco OTRS.
- **Respeito ao Case-Sensitivity:** Preserve a grafia exata das pastas (`FrontEnd`, `BackEnd`, `Css`, `js`, `SIS_OTRS_Database`).

## 2. Padronização de Código (Referência: `FrontEnd/index.php`)

- **Modelo Oficial:** O arquivo `FrontEnd/index.php` é o gabarito visual e de organização. Siga o mesmo estilo de indentação, comentários e importação de scripts.
- **Separação de Camadas:** Mantenha a lógica de processamento no `BackEnd/` e chame-a a partir da interface no `FrontEnd/`.

## 3. Comandos Operacionais

- **Servidor Local (PHP):** `php -S localhost:3000 -t FrontEnd`
- **Acesso Web:** `http://localhost:3000/`
- **Sintaxe PHP:** `php -l FrontEnd/index.php`

## 4. Workflow do Git e Habilidades (Skills)

- **Branches:** Padrão `agents/<nome-da-funcionalidade>`.
- **Commits:** Mensagens objetivas e em português.
- **Skills Locais (`.claude/skills/`):**
  - `php-linter.md`: Validação de sintaxe PHP (`php -l`).
  - `otrs-schema.md`: Consulta e validação das tabelas do banco OTRS.
  - `architecture-check.md`: Garantia da separação de camadas e bloqueio de novas pastas.

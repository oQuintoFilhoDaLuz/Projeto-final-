<!-- 
=======================================================
ARQUIVO: index.php
DESCRIÇÃO: Landing Page Institucional e Comercial do Serviço OTRS
ATOR: Cliente em potencial / Visitante
=======================================================
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpSync - Soluções em Gestão de Atendimento OTRS</title>

    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Ícones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Estilo Customizado -->
    <link rel="stylesheet" href="Css/index_style.css">
    <link rel="stylesheet" href="Css/modal_orcamento.css">
</head>
<body class="bg-light">

    <!-- =======================================================
         SEÇÃO 1: Cabeçalho e Navegação Comercial
         ======================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="bi bi-headset me-2"></i>HelpSync
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuComercial">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuComercial">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" href="#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#quem-somos">Quem Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicos">O Que Vendemos</a></li>
                </ul>
                <div>
                    <button type="button" class="btn btn-outline-light btn-sm me-2" id="btnAbrirOrcamentoTopo">Solicitar Orçamento</button>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalLogin">Área do Cliente</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- =======================================================
         SEÇÃO 2: Apresentação Principal (Faixa Azul)
         ======================================================= -->
    <section id="inicio" class="py-4 bg-primary text-white text-center text-lg-start">
        <div class="container py-2">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="display-6 fw-bold mb-3">Revolucione o Atendimento da Sua Empresa</h1>
                    
                    <p class="mb-4 text-white-50" style="font-size: 0.95rem; line-height: 1.5;">
                        Vendemos e implementamos a melhor solução de Helpdesk e Service Desk (OTRS) do mercado, totalmente sob medida para a sua operação. Otimize a rotina da sua equipe, reduza custos e elimine gargalos na resolução de chamados com inteligência, automação e relatórios de SLA em tempo real.
                    </p>
                    
                    <!-- BOTÕES DA FAIXA AZUL ATUALIZADOS -->
                    <div class="d-flex flex-column flex-sm-row gap-2">
                        <button type="button" class="btn btn-outline-light px-4" data-bs-toggle="modal" data-bs-target="#modalClientes">
                            <i class="bi bi-building-check me-2"></i>Nossos Clientes
                        </button>
                        <button type="button" class="btn btn-outline-light px-4" data-bs-toggle="modal" data-bs-target="#modalFaq">
                            <i class="bi bi-question-circle me-2"></i>Dúvidas Frequentes
                        </button>
                        <button type="button" class="btn btn-light text-primary fw-semibold px-4" data-bs-toggle="modal" data-bs-target="#modalContato">
                            <i class="bi bi-chat-dots me-2"></i>Entre em Contato
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-5 mt-4 mt-lg-0 text-center">
                    <i class="bi bi-gear-wide-connected display-3 text-white-50"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- =======================================================
         SEÇÃO 3: Quem Somos e Nossa História
         ======================================================= -->
    <section id="quem-somos" class="py-5 bg-white border-bottom">
        <div class="container py-4">
            
            <div class="text-center mb-5">
                <span class="badge bg-primary-subtle text-primary fw-bold text-uppercase px-3 py-2 rounded-pill mb-2">Conheça Nossa História</span>
                <h2 class="fw-bold display-6">Especialistas em Transformar o Atendimento da Sua Empresa</h2>
                <p class="text-muted lead mx-auto" style="max-width: 700px;">
                    Combinamos a potência do ecossistema OTRS com consultoria estratégica para organizar seus fluxos de trabalho e encantar seus clientes.
                </p>
            </div>

            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <h3 class="fw-bold text-dark mb-3">Mais que uma consultoria, seu parceiro de crescimento</h3>
                    <p class="text-muted">
                        Nascemos da percepção de que muitas empresas perdem tempo e dinheiro por não possuírem uma ferramenta de chamados alinhada aos seus processos reais. O suporte não pode ser um gargalo — ele precisa ser o motor de satisfação do seu negócio.
                    </p>
                    <p class="text-muted">
                        Atuamos do planejamento inicial à entrega final: mapeamos os seus gargalos operacionais, desenhamos filas eficientes, configuramos métricas de SLA rigorosas e entregamos um ambiente <strong>OTRS pronto para rodar</strong>, com treinamento completo para a sua equipe.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-light rounded-4 border shadow-sm">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-shield-check me-2"></i>Por que nos escolher?</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                                <div>
                                    <strong>Sem Fórmulas Prontas:</strong> Customizamos o sistema exatamente com a cara e as regras da sua operação.
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                                <div>
                                    <strong>Foco em Métricas (SLA):</strong> Acompanhe prazos de atendimento, gargalos de equipe e relatórios em tempo real.
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success fs-5 me-3 mt-1"></i>
                                <div>
                                    <strong>Suporte Contínuo:</strong> Não deixamos sua empresa na mão após a entrega; garantimos acompanhamento constante.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row g-4 pt-3">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm bg-light text-center p-4">
                        <div class="card-body">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-rocket-takeoff fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Nossa Missão</h5>
                            <p class="text-muted small mb-0">
                                Descomplicar a gestão de chamados corporativos, entregando soluções em OTRS inteligentes que economizam tempo e valorizam cada atendimento.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm bg-light text-center p-4">
                        <div class="card-body">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-eye fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Nossa Visão</h5>
                            <p class="text-muted small mb-0">
                                Ser a referência nacional em automação e suporte técnico OTRS, reconhecida pela excelência em customização e parceria de longo prazo.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm bg-light text-center p-4">
                        <div class="card-body">
                            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-heart-pulse fs-3"></i>
                            </div>
                            <h5 class="fw-bold">Nossos Valores</h5>
                            <p class="text-muted small mb-0">
                                Transparência total nas entregas, obsessão pela satisfação do cliente, agilidade nas respostas e melhoria contínua da tecnologia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =======================================================
         SEÇÃO 4: O Que Vendemos (Nossos Serviços/Produtos)
         ======================================================= -->
    <section id="servicos" class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold">O Que Vendemos</h2>
                <p class="text-muted">Soluções completas para transformar a gestão de atendimento do seu negócio</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <i class="bi bi-cpu text-primary display-5 mb-3"></i>
                            <h5 class="card-title fw-bold">Implantação de OTRS</h5>
                            <p class="card-text text-muted">Configuramos a plataforma completa de OTRS adaptada às regras do seu negócio e infraestrutura.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <i class="bi bi-sliders text-primary display-5 mb-3"></i>
                            <h5 class="card-title fw-bold">Consultoria & Customização</h5>
                            <p class="card-text text-muted">Desenvolvemos relatórios em SQL Server, automação de filas e integração com outros sistemas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <i class="bi bi-person-check text-primary display-5 mb-3"></i>
                            <h5 class="card-title fw-bold">Treinamento de Equipes</h5>
                            <p class="card-text text-muted">Capacitamos seus atendentes e gestores para tirarem o máximo proveito da ferramenta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =======================================================
         SEÇÃO 5: Rodapé 
         ======================================================= -->
    <footer class="bg-dark text-light py-4 border-top border-secondary">
        <div class="container text-center text-md-start">
            <div class="row g-3">
                <div class="col-md-6">
                    <h5 class="fw-bold text-primary"><i class="bi bi-headset me-2"></i>HelpSync</h5>
                    <p class="text-secondary small">Especialistas em implantação, suporte e consultoria de plataformas de atendimento corporativo.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <h5 class="fw-bold">Fale Conosco</h5>
                    <p class="text-secondary small mb-1"><i class="bi bi-envelope me-2"></i>contato@helpsync.com.br</p>
                    <p class="text-secondary small"><i class="bi bi-telephone me-2"></i>(11) 4000-0000</p>
                </div>
            </div>
            <hr class="border-secondary my-3">
            <p class="text-center text-secondary small mb-0">&copy; 2026 HelpSync. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- =======================================================
         MODAIS DO SISTEMA
         ======================================================= -->

    <!-- Modal 1: Login (Área do Cliente) -->
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title"><i class="bi bi-box-arrow-in-right me-2"></i>Área do Cliente</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="Tela_incial.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Usuário</label>
                            <input type="text" class="form-control" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Acessar Painel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2: Solicitação de Orçamento -->
    <div class="modal fade" id="modalOrcamento" tabindex="-1" aria-labelledby="modalOrcamentoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalOrcamentoLabel">Solicitar Orçamento OTRS</h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Fechar">&times;</button>
                </div>

                <div class="steps-nav">
                    <div class="step-tab active" id="tab-1">1. Requisitante</div>
                    <div class="step-tab" id="tab-2">2. Empresa</div>
                    <div class="step-tab" id="tab-3">3. Necessidades</div>
                </div>

                <form id="formOrcamento" action="../BackEnd/processar_orcamento.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="descricao" name="descricao">

                        <div class="step-content active" id="step-1">
                            <div class="form-group">
                                <label for="nome">Nome Completo *</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="Ex.: João Silva" required>
                            </div>
                            <div class="form-group">
                                <label for="cargo">Seu Cargo na Empresa *</label>
                                <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Ex.: Diretor de TI, Gerente de Operações..." required>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">E-mail Corporativo *</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="joao@suaempresa.com.br" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefone">WhatsApp / Telefone *</label>
                                    <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="(11) 99999-9999" required>
                                </div>
                            </div>
                        </div>

                        <div class="step-content" id="step-2">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="empresa">Nome / Razão Social *</label>
                                    <input type="text" id="empresa" name="empresa" class="form-control" placeholder="Nome da empresa" required>
                                </div>
                                <div class="form-group">
                                    <label for="cnpj">CNPJ (Opcional)</label>
                                    <input type="text" id="cnpj" name="cnpj" class="form-control" placeholder="00.000.000/0001-00">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="segmento">Segmento de Atuação</label>
                                    <select id="segmento" name="segmento" class="form-control">
                                        <option value="">Selecione...</option>
                                        <option value="tecnologia">Tecnologia / TI</option>
                                        <option value="saude">Saúde</option>
                                        <option value="servicos">Serviços</option>
                                        <option value="industria">Indústria</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="porte">Tamanho da Empresa</label>
                                    <select id="porte" name="porte" class="form-control">
                                        <option value="">Selecione...</option>
                                        <option value="1-20">1 a 20 colaboradores</option>
                                        <option value="21-100">21 a 100 colaboradores</option>
                                        <option value="101-500">101 a 500 colaboradores</option>
                                        <option value="+500">Mais de 500 colaboradores</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="step-content" id="step-3">
                            <div id="technicalSection" class="technical-section">
                                <div class="form-group">
                                    <label>Quais serviços você necessita? (Pode marcar mais de um)</label>
                                    <div class="cards-grid">
                                        <label class="card-option">
                                            <input type="checkbox" name="servicos[]" value="implantacao">
                                            <span class="card-title">Nova Implantação</span>
                                            <span class="card-desc">Implantar e configurar o OTRS do zero.</span>
                                        </label>
                                        <label class="card-option">
                                            <input type="checkbox" name="servicos[]" value="migracao">
                                            <span class="card-title">Migração / Atualização</span>
                                            <span class="card-desc">Atualizar versão do OTRS existente.</span>
                                        </label>
                                        <label class="card-option">
                                            <input type="checkbox" name="servicos[]" value="suporte">
                                            <span class="card-title">Sustentação e Suporte</span>
                                            <span class="card-desc">Contrato mensal de suporte técnico.</span>
                                        </label>
                                        <label class="card-option">
                                            <input type="checkbox" name="servicos[]" value="customizacao">
                                            <span class="card-title">Customização / Layout</span>
                                            <span class="card-desc">Ajuste de telas, temas e fluxos.</span>
                                        </label>
                                        <label class="card-option">
                                            <input type="checkbox" name="servicos[]" value="treinamento">
                                            <span class="card-title">Treinamento</span>
                                            <span class="card-desc">Capacitação para equipe e agentes.</span>
                                        </label>
                                        <label class="card-option">
                                            <input type="checkbox" name="servicos[]" value="integracao">
                                            <span class="card-title">Integrações (API)</span>
                                            <span class="card-desc">Conectar OTRS com ERP/CRM/Outros.</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="agentes">Estimativa de Agentes (Atendentes no sistema):</label>
                                    <select id="agentes" name="agentes" class="form-control">
                                        <option value="1-5">1 a 5 agentes</option>
                                        <option value="6-15">6 a 15 agentes</option>
                                        <option value="16-50">16 a 50 agentes</option>
                                        <option value="+50">Mais de 50 agentes</option>
                                    </select>
                                </div>
                            </div>

                            <label class="consulting-card">
                                <input type="checkbox" id="needConsulting" name="needConsulting" value="1">
                                <div>
                                    <div class="consulting-card-title">Nao tenho conhecimento tecnico suficiente / Quero uma consultoria</div>
                                    <div class="consulting-card-desc">Marque esta opção se prefere que nosso especialista faça uma reunião de diagnóstico para entender suas necessidades.</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="footer-actions">
                            <button type="button" class="btn btn-secondary" id="btnPrev" style="display: none;">Voltar</button>
                            <div style="flex: 1;"></div>
                            <button type="button" class="btn btn-primary" id="btnNext">Avançar</button>
                            <button type="submit" class="btn btn-primary" id="btnSubmit" style="display: none;">Enviar Solicitação</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal 3: Entre em Contato -->
    <div class="modal fade" id="modalContato" tabindex="-1" aria-labelledby="modalContatoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalContatoLabel"><i class="bi bi-chat-dots-fill me-2"></i>Entre em Contato</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body p-4">
                    <p class="text-muted mb-4">Escolha o melhor canal para falar diretamente com a nossa equipe de atendimento:</p>
                    
                    <ul class="list-group list-group-flush border-top border-bottom mb-3">
                        <li class="list-group-item d-flex align-items-center py-3">
                            <i class="bi bi-telephone-fill text-primary fs-3 me-3"></i>
                            <div>
                                <small class="text-muted d-block fw-semibold text-uppercase">Central 0800</small>
                                <strong class="fs-6">0800 700 4357</strong>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <i class="bi bi-whatsapp text-success fs-3 me-3"></i>
                            <div>
                                <small class="text-muted d-block fw-semibold text-uppercase">WhatsApp Comercial</small>
                                <strong class="fs-6">(61) 98765-4321</strong>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <i class="bi bi-instagram text-danger fs-3 me-3"></i>
                            <div>
                                <small class="text-muted d-block fw-semibold text-uppercase">Instagram Oficial</small>
                                <strong class="fs-6">@helpsync.otrs</strong>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-3">
                            <i class="bi bi-geo-alt-fill text-warning fs-3 me-3"></i>
                            <div>
                                <small class="text-muted d-block fw-semibold text-uppercase">Nosso Endereço</small>
                                <strong class="fs-6">Setor Comercial Sul (SCS), Quadra 4 - Asa Sul, Brasília - DF</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4: Nossos Clientes -->
<div class="modal fade" id="modalClientes" tabindex="-1" aria-labelledby="modalClientesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalClientesLabel">
                    <i class="bi bi-building-check me-2 text-primary"></i>Empresas que Usam Dos Nossos Serviços
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-muted mb-4 text-center">
                    Ajudamos empresas e órgãos públicos a organizar a gestão de atendimento com agilidade, controle e eficiência no dia a dia.
                </p>

                <div class="row g-3">
                    <!-- Cliente 1: Valor Ambiental -->
                    <div class="col-md-4">
                        <div class="card h-100 border text-center p-3 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center mb-3" style="height: 75px;">
                                    <img src="Imagens/logos/Logo_Valor.png" alt="Valor Ambiental" class="img-fluid rounded" style="max-height: 70px; max-width: 100%; object-fit: contain;">
                                </div>
                                <h5 class="fw-bold fs-6">Valor Ambiental</h5>
                                <span class="badge bg-success mb-2">Eficiência Operacional</span>
                                <p class="text-muted small mb-0">Otimização no fluxo de chamados operacionais e controle de solicitações internas.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cliente 2: CONTER -->
                    <div class="col-md-4">
                        <div class="card h-100 border text-center p-3 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center mb-3" style="height: 75px;">
                                    <img src="Imagens/logos/Logo_Conter.png" alt="Conselho Nacional de Técnicos em Radiologia" class="img-fluid rounded" style="max-height: 70px; max-width: 100%; object-fit: contain;">
                                </div>
                                <h5 class="fw-bold fs-6">Conselho Nacional de Técnicos em Radiologia</h5>
                                <span class="badge bg-info text-dark mb-2">Atendimento Padronizado</span>
                                <p class="text-muted small mb-0">Centralização de demandas institucionais e agilidade no suporte aos profissionais.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cliente 3: Ministério das Cidades -->
                    <div class="col-md-4">
                        <div class="card h-100 border text-center p-3 shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center mb-3" style="height: 75px;">
                                    <img src="Imagens/logos/Logo_Mcid.png" alt="Ministério das Cidades" class="img-fluid rounded" style="max-height: 70px; max-width: 100%; object-fit: contain;">
                                </div>
                                <h5 class="fw-bold fs-6">Ministério das Cidades</h5>
                                <span class="badge bg-warning text-dark mb-2">Setor Público</span>
                                <p class="text-muted small mb-0">Rastreabilidade completa e organização na gestão de solicitações e chamados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="btnAbrirOrcamentoCliente">Seja nosso cliente</button>
            </div>
        </div>
    </div>
</div>

    <!-- Modal 5: Dúvidas Frequentes (FAQ) -->
    <div class="modal fade" id="modalFaq" tabindex="-1" aria-labelledby="modalFaqLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="modalFaqLabel"><i class="bi bi-question-circle me-2 text-warning"></i>Dúvidas Frequentes (FAQ)</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="accordion accordion-flush" id="accordionFaq">
                        <div class="accordion-item border rounded mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Quanto tempo leva a implantação do OTRS?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                <div class="accordion-body text-muted">
                                    A implantação padrão leva em média de <strong>5 a 15 dias úteis</strong>, dependendo da complexidade das regras de negócio, quantidade de filas e relatórios customizados.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    O sistema fica hospedado na nuvem ou no meu servidor?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                <div class="accordion-body text-muted">
                                    Oferecemos ambas as opções! Podemos implantar no seu servidor local (On-Premise) ou em nossa infraestrutura na nuvem pronta e gerenciada.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Minha equipe terá treinamento?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFaq">
                                <div class="accordion-body text-muted">
                                    Sim! Fornecemos treinamento completo tanto para os atendentes (agentes) quanto para os administradores do sistema, com direito a gravação e documentação.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap JS Bundle com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function () {
            const modalOrcamentoElement = document.getElementById("modalOrcamento");
            const btnAbrirOrcamentoTopo = document.getElementById("btnAbrirOrcamentoTopo");
            const btnAbrirOrcamentoCliente = document.getElementById("btnAbrirOrcamentoCliente");
            let modalOrcamentoInstance = null;

            function getModalOrcamentoInstance() {
                if (!modalOrcamentoElement || typeof bootstrap === "undefined") {
                    return null;
                }

                if (!modalOrcamentoInstance) {
                    modalOrcamentoInstance = bootstrap.Modal.getOrCreateInstance(modalOrcamentoElement, {
                        backdrop: true,
                        keyboard: true,
                        focus: true
                    });
                }

                return modalOrcamentoInstance;
            }

            function openModal() {
                const modalInstance = getModalOrcamentoInstance();
                if (modalInstance) {
                    modalInstance.show();
                }
            }

            function closeModal() {
                const modalInstance = getModalOrcamentoInstance();
                if (modalInstance) {
                    modalInstance.hide();
                }
            }

            function bindOpenModalButton(buttonElement) {
                if (!buttonElement) {
                    return;
                }

                buttonElement.addEventListener("click", function () {
                    if (typeof bootstrap === "undefined") {
                        return;
                    }

                    const parentModalElement = buttonElement.closest(".modal");
                    if (!parentModalElement || !parentModalElement.classList.contains("show")) {
                        openModal();
                        return;
                    }

                    const parentModalInstance = bootstrap.Modal.getInstance(parentModalElement);
                    if (!parentModalInstance) {
                        openModal();
                        return;
                    }

                    parentModalElement.addEventListener("hidden.bs.modal", openModal, { once: true });
                    parentModalInstance.hide();
                });
            }

            bindOpenModalButton(btnAbrirOrcamentoTopo);
            bindOpenModalButton(btnAbrirOrcamentoCliente);
            window.openModal = openModal;
            window.closeModal = closeModal;

            if (modalOrcamentoElement) {
                modalOrcamentoElement.addEventListener("click", function (event) {
                    if (event.target === modalOrcamentoElement) {
                        closeModal();
                    }
                });
            }

            document.addEventListener("keydown", function (event) {
                if (event.key === "Escape" && modalOrcamentoElement && modalOrcamentoElement.classList.contains("show")) {
                    closeModal();
                }
            });

            const quoteForm = document.getElementById("formOrcamento");
            if (!quoteForm) {
                return;
            }

            const totalSteps = 3;
            let currentStep = 1;
            const btnPrev = document.getElementById("btnPrev");
            const btnNext = document.getElementById("btnNext");
            const btnSubmit = document.getElementById("btnSubmit");
            const consultingToggle = document.getElementById("needConsulting");
            const technicalSection = document.getElementById("technicalSection");
            const descricaoInput = document.getElementById("descricao");
            const serviceCheckboxes = quoteForm.querySelectorAll('input[name="servicos[]"]');

            function updateFooterButtons() {
                btnPrev.style.display = currentStep === 1 ? "none" : "inline-block";
                btnNext.style.display = currentStep === totalSteps ? "none" : "inline-block";
                btnSubmit.style.display = currentStep === totalSteps ? "inline-block" : "none";
            }

            function showStep(stepNumber) {
                for (let step = 1; step <= totalSteps; step += 1) {
                    const stepContent = document.getElementById("step-" + step);
                    const stepTab = document.getElementById("tab-" + step);
                    if (stepContent && stepTab) {
                        const isActive = step === stepNumber;
                        stepContent.classList.toggle("active", isActive);
                        stepTab.classList.toggle("active", isActive);
                    }
                }

                currentStep = stepNumber;
                updateFooterButtons();
            }

            function validateCurrentStep() {
                const currentStepElement = document.getElementById("step-" + currentStep);
                if (!currentStepElement) {
                    return true;
                }

                const fields = currentStepElement.querySelectorAll("input, select, textarea");
                for (let i = 0; i < fields.length; i += 1) {
                    if (!fields[i].checkValidity()) {
                        fields[i].reportValidity();
                        return false;
                    }
                }

                return true;
            }

            function updateSelectedCards() {
                for (let i = 0; i < serviceCheckboxes.length; i += 1) {
                    const card = serviceCheckboxes[i].closest(".card-option");
                    if (card) {
                        card.classList.toggle("selected", serviceCheckboxes[i].checked);
                    }
                }
            }

            function handleConsultingSection() {
                if (!consultingToggle || !technicalSection) {
                    return;
                }

                const disableTechnicalSection = consultingToggle.checked;
                technicalSection.classList.toggle("disabled", disableTechnicalSection);
                const technicalFields = technicalSection.querySelectorAll("input, select, textarea");
                for (let i = 0; i < technicalFields.length; i += 1) {
                    technicalFields[i].disabled = disableTechnicalSection;
                }
            }

            function fillDescriptionSummary() {
                const services = [];
                for (let i = 0; i < serviceCheckboxes.length; i += 1) {
                    if (serviceCheckboxes[i].checked) {
                        services.push(serviceCheckboxes[i].value);
                    }
                }

                const summary = [
                    "Servicos: " + (services.length ? services.join(", ") : "nao informado"),
                    "Consultoria: " + (consultingToggle && consultingToggle.checked ? "sim" : "nao"),
                    "Agentes: " + (document.getElementById("agentes").value || "nao informado"),
                    "Cargo: " + (document.getElementById("cargo").value || "nao informado"),
                    "Empresa: " + (document.getElementById("empresa").value || "nao informado")
                ];
                descricaoInput.value = summary.join(" | ");
            }

            if (btnNext) {
                btnNext.addEventListener("click", function () {
                    if (!validateCurrentStep()) {
                        return;
                    }
                    if (currentStep < totalSteps) {
                        showStep(currentStep + 1);
                    }
                });
            }

            if (btnPrev) {
                btnPrev.addEventListener("click", function () {
                    if (currentStep > 1) {
                        showStep(currentStep - 1);
                    }
                });
            }

            for (let i = 0; i < serviceCheckboxes.length; i += 1) {
                serviceCheckboxes[i].addEventListener("change", updateSelectedCards);
            }

            if (consultingToggle) {
                consultingToggle.addEventListener("change", handleConsultingSection);
            }

            quoteForm.addEventListener("submit", function () {
                fillDescriptionSummary();
            });

            showStep(1);
            updateSelectedCards();
            handleConsultingSection();
        }());
    </script>
</body>
</html>
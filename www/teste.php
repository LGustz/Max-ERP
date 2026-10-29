<?php
// Simulação de dados dinâmicos que viriam do Banco de Dados (MySQL, SQLite, etc.)
$usuario = "Administrador";
$estatisticas = [
    'vendas_mes' => 'R$ 00,00',
    'clientes_ativos' => '1.240',
    'pedidos_pendentes' => '38',
    'taxa_conversao' => '4.8%'
];

$ultimos_pedidos = [
    ['id' => '#1042', 'cliente' => 'Ana Souza', 'status' => 'Concluído', 'valor' => 'R$ 350,00', 'data' => '29/10/2026'],
    ['id' => '#1041', 'cliente' => 'Carlos Lima', 'status' => 'Pendente', 'valor' => 'R$ 1.200,00', 'data' => '28/10/2026'],
    ['id' => '#1040', 'cliente' => 'Mariana Dias', 'status' => 'Cancelado', 'valor' => 'R$ 180,00', 'data' => '28/10/2026'],
    ['id' => '#1039', 'cliente' => 'Roberto Mendes', 'status' => 'Concluído', 'valor' => 'R$ 750,00', 'data' => '27/10/2026']
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Principal</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #212529;
            color: #fff;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.75);
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .card-stat {
            border-left: 4px solid #0d6efd;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            
            <!-- SIDEBAR -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3">
                <div class="position-sticky">
                    <h4 class="text-white mb-4"><i class="bi bi-speedometer2"></i> MeuPainel</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link active rounded"><i class="bi bi-house-door me-2"></i> Dashboard</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link rounded"><i class="bi bi-people me-2"></i> Clientes</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link rounded"><i class="bi bi-box-seam me-2"></i> Produtos</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link rounded"><i class="bi bi-cart-check me-2"></i> Pedidos</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link rounded"><i class="bi bi-graph-up me-2"></i> Relatórios</a>
                        </li>
                        <li class="nav-item mt-4">
                            <a href="#" class="nav-link text-danger rounded"><i class="bi bi-box-arrow-right me-2"></i> Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- CONTEÚDO PRINCIPAL -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                
                <!-- CABEÇALHO -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Visão Geral</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle me-1"></i> <?php echo htmlspecialchars($usuario); ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                               <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                               <li><a class="dropdown-item" href="#">Configurações</a></li>
                               <li><hr class="dropdown-divider"></li>
                               <li><a class="dropdown-item text-danger" href="#">Sair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- CARDS DE ESTATÍSTICAS -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4 mb-4">
                    <div class="col">
                        <div class="card card-stat shadow-sm h-100 py-2">
                            <div class="card-body">
                                <div class="text-muted small text-uppercase fw-bold">Vendas (Mês)</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $estatisticas['vendas_mes']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-stat shadow-sm h-100 py-2" style="border-left-color: #198754;">
                            <div class="card-body">
                                <div class="text-muted small text-uppercase fw-bold">Clientes Ativos</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $estatisticas['clientes_ativos']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-stat shadow-sm h-100 py-2" style="border-left-color: #ffc107;">
                            <div class="card-body">
                                <div class="text-muted small text-uppercase fw-bold">Pedidos Pendentes</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $estatisticas['pedidos_pendentes']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-stat shadow-sm h-100 py-2" style="border-left-color: #0dcaf0;">
                            <div class="card-body">
                                <div class="text-muted small text-uppercase fw-bold">Taxa de Conversão</div>
                                <div class="h3 mb-0 font-weight-bold text-gray-800"><?php echo $estatisticas['taxa_conversao']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TABELA DE ÚLTIMOS PEDIDOS -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-primary"><i class="bi bi-table me-2"></i>Últimos Pedidos</h5>
                        <button class="btn btn-sm btn-primary">Ver Todos</button>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Cliente</th>
                                        <th>Status</th>
                                        <th>Valor</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ultimos_pedidos as $pedido): ?>
                                    <tr>
                                        <td><strong><?php echo $pedido['id']; ?></strong></td>
                                        <td><?php echo htmlspecialchars($pedido['cliente']); ?></td>
                                        <td>
                                            <?php 
                                                $badgeClass = match($pedido['status']) {
                                                    'Concluído' => 'bg-success',
                                                    'Pendente' => 'bg-warning text-dark',
                                                    'Cancelado' => 'bg-danger',
                                                    default => 'bg-secondary'
                                                };
                                            ?>
                                            <span class="badge <?php echo $badgeClass; ?>"><?php echo $pedido['status']; ?></span>
                                        </td>
                                        <td><?php echo $pedido['valor']; ?></td>
                                        <td><?php echo $pedido['data']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Corporation - OpsWorks Application</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 40px 0;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        .info-card {
            background: rgba(255,255,255,0.15);
            padding: 25px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .server-info {
            background: rgba(46, 204, 113, 0.2);
            border-left: 4px solid #2ecc71;
        }
        .app-info {
            background: rgba(52, 152, 219, 0.2);
            border-left: 4px solid #3498db;
        }
        .status {
            font-size: 18px;
            font-weight: bold;
            color: #2ecc71;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            background: rgba(255,255,255,0.1);
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        th {
            background: rgba(255,255,255,0.2);
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
        }
        .instance-id {
            color: #f39c12;
            font-weight: bold;
        }
        .version-info {
            background: rgba(155, 89, 182, 0.2);
            border-left: 4px solid #9b59b6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 XYZ Corporation</h1>
            <h2>AWS OpsWorks Multi-Instance Application</h2>
            <p>Managed Infrastructure • Auto-Scaling • Configuration Management</p>
        </div>

        <div class="info-grid">
            <div class="info-card server-info">
                <div class="status">✅ Server Status: ONLINE</div>
                <h3>Server Information</h3>
                <table>
                    <tr>
                        <th>Property</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>Instance ID</td>
                        <td class="instance-id"><?php echo file_get_contents('http://169.254.169.254/latest/meta-data/instance-id'); ?></td>
                    </tr>
                    <tr>
                        <td>PHP Version</td>
                        <td><?php echo phpversion(); ?></td>
                    </tr>
                    <tr>
                        <td>Server Software</td>
                        <td><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></td>
                    </tr>
                    <tr>
                        <td>Server Name</td>
                        <td><?php echo $_SERVER['SERVER_NAME'] ?? 'Unknown'; ?></td>
                    </tr>
                    <tr>
                        <td>Current Time</td>
                        <td><?php echo date('Y-m-d H:i:s T'); ?></td>
                    </tr>
                </table>
            </div>

            <div class="info-card app-info">
                <div class="status">🎯 Application Status: RUNNING</div>
                <h3>Application Details</h3>
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>OpsWorks Deployment</td>
                        <td style="color: #2ecc71;">✅ Active</td>
                    </tr>
                    <tr>
                        <td>Multi-Instance Setup</td>
                        <td style="color: #2ecc71;">✅ Configured</td>
                    </tr>
                    <tr>
                        <td>Auto Scaling</td>
                        <td style="color: #2ecc71;">✅ Enabled</td>
                    </tr>
                    <tr>
                        <td>Load Balancing</td>
                        <td style="color: #2ecc71;">✅ Ready</td>
                    </tr>
                    <tr>
                        <td>Health Monitoring</td>
                        <td style="color: #2ecc71;">✅ Active</td>
                    </tr>
                </table>
            </div>

            <div class="info-card version-info">
                <div class="status">📝 Version Information</div>
                <h3>Deployment Details</h3>
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>App Version</td>
                        <td><strong>v1.0</strong> - Initial Release</td>
                    </tr>
                    <tr>
                        <td>Last Updated</td>
                        <td><?php echo date('F j, Y - g:i A'); ?></td>
                    </tr>
                    <tr>
                        <td>Deployment ID</td>
                        <td><?php echo substr(md5(time()), 0, 8); ?></td>
                    </tr>
                    <tr>
                        <td>Environment</td>
                        <td>Production</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="info-card">
            <h3>🔧 System Diagnostics</h3>
            <p><strong>Memory Usage:</strong> <?php echo round(memory_get_usage() / 1024 / 1024, 2); ?> MB</p>
            <p><strong>Peak Memory:</strong> <?php echo round(memory_get_peak_usage() / 1024 / 1024, 2); ?> MB</p>
            <p><strong>Request URI:</strong> <?php echo $_SERVER['REQUEST_URI'] ?? '/'; ?></p>
            <p><strong>User Agent:</strong> <?php echo substr($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown', 0, 60) . '...'; ?></p>
            
            <?php
            // Simple load test
            $start_time = microtime(true);
            for($i = 0; $i < 10000; $i++) {
                $temp = sqrt($i);
            }
            $execution_time = round((microtime(true) - $start_time) * 1000, 2);
            ?>
            <p><strong>Processing Speed:</strong> <?php echo $execution_time; ?> ms (10K operations)</p>
        </div>

        <div class="footer">
            <h3>🏢 XYZ Corporation</h3>
            <p>Powered by AWS OpsWorks • Multi-Instance Architecture</p>
            <p>© <?php echo date('Y'); ?> XYZ Corporation - All Rights Reserved</p>
            <p><em>This application demonstrates OpsWorks deployment across multiple instances</em></p>
        </div>
    </div>

    <script>
        // Auto-refresh every 30 seconds to show load balancing
        setTimeout(() => {
            window.location.reload();
        }, 30000);
    </script>
</body>
</html>

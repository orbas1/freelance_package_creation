import 'package:flutter/material.dart';
import '../../widgets/metric_grid.dart';

class ClientDashboardScreen extends StatelessWidget {
  const ClientDashboardScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final metrics = [
      MetricItem(label: 'Open projects', value: '2'),
      MetricItem(label: 'Active contracts', value: '3'),
      MetricItem(label: 'In escrow', value: '\$1,200'),
      MetricItem(label: 'Total spent', value: '\$9,800'),
    ];
    return Scaffold(
      appBar: AppBar(title: const Text('Client Dashboard')),
      body: SingleChildScrollView(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            MetricGrid(metrics: metrics),
            const SizedBox(height: 16),
            Text('Active contracts', style: Theme.of(context).textTheme.titleMedium),
            const ListTile(title: Text('API build with Alice'), subtitle: Text('In Progress')),
            const SizedBox(height: 16),
            Text('Open disputes', style: Theme.of(context).textTheme.titleMedium),
            const ListTile(title: Text('Dispute on Landing page'), subtitle: Text('Awaiting admin')),
            const SizedBox(height: 16),
            Text('Recommended freelancers', style: Theme.of(context).textTheme.titleMedium),
            const ListTile(title: Text('Sam K.'), subtitle: Text('Flutter, Firebase'), trailing: Icon(Icons.chevron_right)),
          ],
        ),
      ),
    );
  }
}

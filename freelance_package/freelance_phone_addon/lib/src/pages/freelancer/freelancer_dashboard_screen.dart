import 'package:flutter/material.dart';
import '../../widgets/metric_grid.dart';

class FreelancerDashboardScreen extends StatelessWidget {
  const FreelancerDashboardScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final metrics = [
      MetricItem(label: 'Active gigs', value: '3'),
      MetricItem(label: 'Active contracts', value: '2'),
      MetricItem(label: 'Open proposals', value: '4'),
      MetricItem(label: 'Earnings', value: '\$2,400'),
    ];
    final recent = [
      {'title': 'Landing page redesign', 'status': 'In Progress'},
      {'title': 'API integration', 'status': 'Submitted'},
    ];
    return Scaffold(
      appBar: AppBar(title: const Text('Freelancer')),
      body: SingleChildScrollView(
        padding: const EdgeInsets.all(16),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            MetricGrid(metrics: metrics),
            const SizedBox(height: 16),
            Text('Active Contracts', style: Theme.of(context).textTheme.titleMedium),
            ...recent.map((c) => ListTile(title: Text(c['title']!), subtitle: Text(c['status']!))).toList(),
            const SizedBox(height: 16),
            Text('Recent Proposals', style: Theme.of(context).textTheme.titleMedium),
            const ListTile(title: Text('Marketing site build'), subtitle: Text('Pending'), trailing: Icon(Icons.chevron_right)),
          ],
        ),
      ),
    );
  }
}

import 'package:flutter/material.dart';
import '../../models/escrow.dart';

class EscrowOverviewScreen extends StatelessWidget {
  const EscrowOverviewScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final awaiting = [Escrow(id: 1, amount: 500, status: 'Awaiting funding', title: 'Initial milestone')];
    final active = [Escrow(id: 2, amount: 700, status: 'Funded', title: 'Design sprint')];
    final completed = [Escrow(id: 3, amount: 300, status: 'Released', title: 'Bug fixes')];
    return Scaffold(
      appBar: AppBar(title: const Text('Escrow')),
      body: ListView(
        padding: const EdgeInsets.all(16),
        children: [
          _section('Awaiting Funding', awaiting),
          _section('Active Escrows', active),
          _section('Completed', completed),
        ],
      ),
    );
  }

  Widget _section(String title, List<Escrow> items) {
    return Card(
      child: Padding(
        padding: const EdgeInsets.all(12),
        child: Column(crossAxisAlignment: CrossAxisAlignment.start, children: [
          Text(title, style: const TextStyle(fontWeight: FontWeight.bold)),
          ...items.map((e) => ListTile(title: Text(e.title), subtitle: Text(e.status), trailing: Text('\$${e.amount}'))),
          if (items.isEmpty) const ListTile(title: Text('No records')),
        ]),
      ),
    );
  }
}

import 'package:flutter/material.dart';
import '../../models/dispute.dart';

class DisputesListScreen extends StatelessWidget {
  const DisputesListScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final disputes = [
      Dispute(id: 1, title: 'Scope disagreement', status: 'Open', reason: 'Scope', contract: 'API build', messages: const []),
    ];
    final tabs = ['Open', 'Resolved'];
    return DefaultTabController(
      length: tabs.length,
      child: Scaffold(
        appBar: AppBar(title: const Text('Disputes'), bottom: TabBar(tabs: tabs.map((t) => Tab(text: t)).toList())),
        body: TabBarView(
          children: tabs
              .map((t) => ListView.builder(
                    padding: const EdgeInsets.all(16),
                    itemCount: disputes.length,
                    itemBuilder: (context, index) {
                      final d = disputes[index];
                      return Card(
                        child: ListTile(
                          title: Text(d.title),
                          subtitle: Text(d.contract),
                          trailing: Chip(label: Text(d.status)),
                          onTap: () => Navigator.pushNamed(context, '/freelance/dispute', arguments: d),
                        ),
                      );
                    },
                  ))
              .toList(),
        ),
      ),
    );
  }
}

import 'package:flutter/material.dart';

class MyProposalsScreen extends StatelessWidget {
  const MyProposalsScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final proposals = [
      {'project': 'API build', 'status': 'Pending', 'bid': 1500},
      {'project': 'UI polish', 'status': 'Accepted', 'bid': 600},
    ];
    final tabs = ['All', 'Pending', 'Accepted', 'Rejected'];
    return DefaultTabController(
      length: tabs.length,
      child: Scaffold(
        appBar: AppBar(
          title: const Text('My Proposals'),
          bottom: TabBar(tabs: tabs.map((t) => Tab(text: t)).toList()),
        ),
        body: TabBarView(
          children: tabs
              .map((t) => ListView.builder(
                    padding: const EdgeInsets.all(16),
                    itemCount: proposals.length,
                    itemBuilder: (context, index) {
                      final p = proposals[index];
                      return Card(
                        child: ListTile(
                          title: Text(p['project'] as String),
                          subtitle: Text('Bid: \$${p['bid']}'),
                          trailing: Chip(label: Text(p['status'] as String)),
                          onTap: () {},
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

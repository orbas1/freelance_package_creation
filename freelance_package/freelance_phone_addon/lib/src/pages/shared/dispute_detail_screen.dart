import 'package:flutter/material.dart';
import '../../models/dispute.dart';

class DisputeDetailScreen extends StatefulWidget {
  const DisputeDetailScreen({super.key});

  @override
  State<DisputeDetailScreen> createState() => _DisputeDetailScreenState();
}

class _DisputeDetailScreenState extends State<DisputeDetailScreen> {
  final _controller = TextEditingController();

  @override
  Widget build(BuildContext context) {
    final dispute = (ModalRoute.of(context)?.settings.arguments as Dispute?) ??
        Dispute(id: 0, title: 'Dispute', status: 'Open', reason: '', contract: '', messages: const []);
    return Scaffold(
      appBar: AppBar(title: Text(dispute.title)),
      body: Column(
        children: [
          ListTile(title: Text(dispute.contract), subtitle: Text('Reason: ${dispute.reason}')),
          Expanded(
            child: ListView.builder(
              padding: const EdgeInsets.all(16),
              itemCount: dispute.messages.length,
              itemBuilder: (context, index) {
                final m = dispute.messages[index];
                return ListTile(title: Text(m.author), subtitle: Text(m.body), trailing: Text(m.time));
              },
            ),
          ),
          SafeArea(
            child: Padding(
              padding: const EdgeInsets.all(12),
              child: Row(
                children: [
                  Expanded(
                    child: TextField(
                      controller: _controller,
                      decoration: const InputDecoration(hintText: 'Add message'),
                    ),
                  ),
                  IconButton(onPressed: () {}, icon: const Icon(Icons.send)),
                ],
              ),
            ),
          )
        ],
      ),
    );
  }
}

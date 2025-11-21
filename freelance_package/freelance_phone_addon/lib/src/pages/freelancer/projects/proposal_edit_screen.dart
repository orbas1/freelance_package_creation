import 'package:flutter/material.dart';
import '../../../models/project.dart';

class ProposalEditScreen extends StatefulWidget {
  const ProposalEditScreen({super.key});

  @override
  State<ProposalEditScreen> createState() => _ProposalEditScreenState();
}

class _ProposalEditScreenState extends State<ProposalEditScreen> {
  final _formKey = GlobalKey<FormState>();
  double amount = 0;

  @override
  Widget build(BuildContext context) {
    final Project? project = ModalRoute.of(context)?.settings.arguments as Project?;
    final commission = amount * 0.1;
    final net = amount - commission;
    return Scaffold(
      appBar: AppBar(title: const Text('Proposal')),
      body: Form(
        key: _formKey,
        child: ListView(
          padding: const EdgeInsets.all(16),
          children: [
            if (project != null) Text(project.title, style: Theme.of(context).textTheme.titleLarge),
            TextFormField(
              decoration: const InputDecoration(labelText: 'Amount'),
              keyboardType: TextInputType.number,
              onChanged: (v) => setState(() => amount = double.tryParse(v) ?? 0),
            ),
            TextFormField(decoration: const InputDecoration(labelText: 'Duration (days)'), keyboardType: TextInputType.number),
            TextFormField(maxLines: 4, decoration: const InputDecoration(labelText: 'Cover letter')),
            const SizedBox(height: 12),
            Container(
              padding: const EdgeInsets.all(12),
              decoration: BoxDecoration(color: Colors.grey.shade100, borderRadius: BorderRadius.circular(8)),
              child: Column(crossAxisAlignment: CrossAxisAlignment.start, children: [
                Text('Commission: \$${commission.toStringAsFixed(2)}'),
                Text('Net earning: \$${net.toStringAsFixed(2)}'),
              ]),
            ),
            const SizedBox(height: 12),
            ElevatedButton(onPressed: () {}, child: const Text('Submit Proposal')),
            TextButton(onPressed: () {}, child: const Text('Save Draft')),
          ],
        ),
      ),
    );
  }
}

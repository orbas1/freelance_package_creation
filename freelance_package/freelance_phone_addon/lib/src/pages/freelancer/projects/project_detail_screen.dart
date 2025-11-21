import 'package:flutter/material.dart';
import '../../../models/project.dart';

class ProjectDetailScreen extends StatelessWidget {
  const ProjectDetailScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final project = (ModalRoute.of(context)?.settings.arguments as Project?) ??
        Project(id: 0, title: 'Project', description: 'Details about the project', budget: 0, type: 'fixed', proposalsCount: 0);
    return Scaffold(
      appBar: AppBar(title: Text(project.title)),
      bottomNavigationBar: SafeArea(
        child: Padding(
          padding: const EdgeInsets.all(12),
          child: Row(
            children: [
              OutlinedButton(onPressed: () {}, child: const Text('Save')),
              const SizedBox(width: 8),
              Expanded(
                child: ElevatedButton(
                  onPressed: () => Navigator.pushNamed(context, '/freelance/freelancer/proposal', arguments: project),
                  child: const Text('Submit Proposal'),
                ),
              )
            ],
          ),
        ),
      ),
      body: ListView(
        padding: const EdgeInsets.all(16),
        children: [
          Text(project.description),
          const SizedBox(height: 8),
          Text('Budget: \$${project.budget}', style: const TextStyle(fontWeight: FontWeight.bold)),
          Text('Type: ${project.type.toUpperCase()}'),
          const Divider(),
          const Text('Client info'),
          const ListTile(title: Text('Acme Inc'), subtitle: Text('5.0 rating')),
          const SizedBox(height: 12),
          const Text('Milestone hints'),
          const Text('Suggest two milestones in your proposal to align on scope.'),
        ],
      ),
    );
  }
}

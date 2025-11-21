import 'package:flutter/material.dart';
import '../../../models/project.dart';
import '../../../widgets/project_card.dart';

class ProjectsBrowseScreen extends StatelessWidget {
  const ProjectsBrowseScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final projects = [
      Project(id: 1, title: 'Mobile app UI', description: 'Design UI screens', budget: 800, type: 'fixed', proposalsCount: 5),
      Project(id: 2, title: 'Backend API', description: 'Laravel build', budget: 2000, type: 'hourly', proposalsCount: 10),
    ];
    return Scaffold(
      appBar: AppBar(title: const Text('Browse Projects')),
      body: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          children: [
            TextField(decoration: const InputDecoration(prefixIcon: Icon(Icons.search), hintText: 'Search projects')),
            const SizedBox(height: 12),
            Wrap(spacing: 8, children: const [Chip(label: Text('Any')), Chip(label: Text('Fixed')), Chip(label: Text('Hourly'))]),
            const SizedBox(height: 12),
            Expanded(
              child: ListView.builder(
                itemCount: projects.length,
                itemBuilder: (context, index) => ProjectCard(
                  project: projects[index],
                  onTap: () => Navigator.pushNamed(context, '/freelance/freelancer/project', arguments: projects[index]),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}

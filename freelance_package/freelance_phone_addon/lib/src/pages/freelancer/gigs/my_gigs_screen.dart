import 'package:flutter/material.dart';
import '../../../models/gig.dart';
import '../../../widgets/gig_card.dart';

class MyGigsScreen extends StatelessWidget {
  const MyGigsScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final gigs = [
      Gig(id: 1, title: 'Logo design', status: 'active', price: 120, rating: 4.9, ordersQueue: 2),
      Gig(id: 2, title: 'Flutter audit', status: 'paused', price: 300, rating: 4.8, ordersQueue: 0),
    ];
    return Scaffold(
      appBar: AppBar(title: const Text('My Gigs')),
      floatingActionButton: FloatingActionButton(
        onPressed: () => Navigator.pushNamed(context, '/freelance/freelancer/gigs/edit'),
        child: const Icon(Icons.add),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16),
        child: Column(
          children: [
            Wrap(
              spacing: 8,
              children: ['All', 'Draft', 'Active', 'Paused', 'Denied']
                  .map((s) => Chip(label: Text(s)))
                  .toList(),
            ),
            const SizedBox(height: 12),
            Expanded(
              child: ListView.builder(
                itemCount: gigs.length,
                itemBuilder: (context, index) => GigCard(
                  gig: gigs[index],
                  onTap: () => Navigator.pushNamed(context, '/freelance/freelancer/gigs/edit'),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}

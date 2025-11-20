import 'package:flutter/material.dart';
import 'package:flutter_riverpod/flutter_riverpod.dart';

import 'src/state/core_providers.dart';
import 'src/state/gig_provider.dart';
import 'src/state/project_provider.dart';
import 'src/state/dispute_provider.dart';
import 'src/state/escrow_provider.dart';
import 'src/ui/screens/gigs/gigs_list_page.dart';
import 'src/ui/screens/projects/project_list_page.dart';
import 'src/ui/screens/disputes/dispute_list_page.dart';
import 'src/ui/screens/escrow/escrow_status_page.dart';
import 'src/ui/screens/projects/project_management_page.dart';
import 'src/ui/screens/gigs/gig_management_page.dart';
import 'src/ui/screens/escrow/escrow_management_page.dart';

/// Simple value object that can be used by a host app to surface
/// navigation entries for the freelance experience.
class FreelanceMenuEntry {
  const FreelanceMenuEntry({
    required this.title,
    required this.icon,
    required this.builder,
    required this.routeName,
    this.subtitle,
  });

  final String title;
  final String routeName;
  final IconData icon;
  final String? subtitle;
  final WidgetBuilder builder;
}

/// Returns a set of menu entries that mirror the Taskup React Native navigation.
List<FreelanceMenuEntry> buildFreelanceMenuEntries({
  required String baseUrl,
  required String Function() tokenProvider,
}) {
  // The host app must wrap these screens with a [ProviderScope] and
  // override the base URL and token provider so that API requests are
  // authenticated against the Laravel freelance package.
  final overrides = [
    baseUrlProvider.overrideWithValue(baseUrl),
    tokenProviderOverride.overrideWithValue(tokenProvider),
  ];

  return [
    FreelanceMenuEntry(
      title: 'Freelance Gigs',
      routeName: GigsListPage.routeName,
      subtitle: 'Browse curated gigs with filters and favourites',
      icon: Icons.handyman_outlined,
      builder: (context) => ProviderScope(
        overrides: overrides,
        parent: ProviderScope.containerOf(context),
        child: const GigsListPage(),
      ),
    ),
    FreelanceMenuEntry(
      title: 'Freelance Projects',
      routeName: ProjectListPage.routeName,
      subtitle: 'Search open projects and review bids',
      icon: Icons.work_outline,
      builder: (context) => ProviderScope(
        overrides: overrides,
        parent: ProviderScope.containerOf(context),
        child: const ProjectListPage(),
      ),
    ),
    FreelanceMenuEntry(
      title: 'Project Management',
      routeName: ProjectManagementPage.routeName,
      subtitle: 'Tasks, milestones, submissions, and hourly tracking',
      icon: Icons.list_alt_outlined,
      builder: (context) => ProviderScope(
        overrides: overrides,
        parent: ProviderScope.containerOf(context),
        child: const ProjectManagementPage(projectSlug: ''),
      ),
    ),
    FreelanceMenuEntry(
      title: 'Gig Management',
      routeName: GigManagementPage.routeName,
      subtitle: 'Timelines, FAQs, packages, and reviews',
      icon: Icons.store_mall_directory_outlined,
      builder: (context) => ProviderScope(
        overrides: overrides,
        parent: ProviderScope.containerOf(context),
        child: const GigManagementPage(gigId: 0),
      ),
    ),
    FreelanceMenuEntry(
      title: 'Disputes',
      routeName: DisputeListPage.routeName,
      subtitle: 'Manage opened disputes tied to gigs or projects',
      icon: Icons.report_gmailerrorred_outlined,
      builder: (context) => ProviderScope(
        overrides: overrides,
        parent: ProviderScope.containerOf(context),
        child: const DisputeListPage(),
      ),
    ),
    FreelanceMenuEntry(
      title: 'Escrow',
      routeName: EscrowStatusPage.routeName,
      subtitle: 'Track payments and releases across milestones',
      icon: Icons.account_balance_wallet_outlined,
      builder: (context) => ProviderScope(
        overrides: overrides,
        parent: ProviderScope.containerOf(context),
        child: const EscrowStatusPage(),
      ),
    ),
    FreelanceMenuEntry(
      title: 'Escrow Management',
      routeName: EscrowManagementPage.routeName,
      subtitle: 'Partial releases and admin decisions',
      icon: Icons.rule_folder_outlined,
      builder: (context) => ProviderScope(
        overrides: overrides,
        parent: ProviderScope.containerOf(context),
        child: const EscrowManagementPage(),
      ),
    ),
  ];
}
